<script>
    import {
            HMSReactiveStore,
            selectIsLocalAudioEnabled,
            selectIsLocalVideoEnabled,
            selectPeers,
            selectIsConnectedToRoom,
            selectVideoTrackByID,
    } from "@100mslive/hms-video-store";
    const hmsManager = new HMSReactiveStore();
    hmsManager.triggerOnSubscribe();
    const hmsStore = hmsManager.getStore();
    const hmsActions = hmsManager.getActions();
    const form = document.getElementById("join");
    const joinBtn = document.getElementById("join-btn");
    const conference = document.getElementById("conference");
    const peersContainer = document.getElementById("peers-container");
    const leaveBtn = document.getElementById("leave-btn");
    const muteAudio = document.getElementById("mute-aud");
    const muteVideo = document.getElementById("mute-vid");
    const controls = document.getElementById("controls");
    const renderedPeerIDs = new Set();
    joinBtn.onclick = async () => {
            const roomCode = document.getElementById("room-code").value
            const userName = document.getElementById("name").value
            const authToken = await hmsActions.getAuthTokenByRoomCode({
                roomCode
        })
        hmsActions.join({
                userName,
                authToken
        });
    };
    async function leaveRoom() {
            await hmsActions.leave();
            peersContainer.innerHTML = "";
    }
    window.onunload = window.onbeforeunload = leaveRoom;
    leaveBtn.onclick = leaveRoom;
    function createElementWithClass(tag, className) {
            const newElement = document.createElement(tag);
            newElement.className = className;
            return newElement;
    }
    function renderPeer(peer) {
            const peerTileDiv = createElementWithClass("div", "peer-tile");
            const videoElement = createElementWithClass("video", "peer-video");
            const peerTileName = createElementWithClass("div", "peer-name");
            videoElement.autoplay = true;
            videoElement.muted = true;
            videoElement.playsinline = true;
            peerTileName.textContent = peer.name;
            hmsStore.subscribe((track) => {
                if (!track) {
                    return;
            }
            if (track.enabled) {
                    hmsActions.attachVideo(track.id, videoElement);
            } else {
                    hmsActions.detachVideo(track.id, videoElement);
            }
        }, selectVideoTrackByID(peer.videoTrack));
        peerTileDiv.append(videoElement);
        peerTileDiv.append(peerTileName);
        renderedPeerIDs.add(peer.id);
        return peerTileDiv;
    }
    function renderPeers() {
            const peers = hmsStore.getState(selectPeers);
            peers.forEach((peer) => {
                if (!renderedPeerIDs.has(peer.id) && peer.videoTrack) {
                    peersContainer.append(renderPeer(peer));
            }
        });
    }
    hmsStore.subscribe(renderPeers, selectPeers);
    muteAudio.onclick = async () => {
            const audioEnabled = !hmsStore.getState(selectIsLocalAudioEnabled);
            await hmsActions.setLocalAudioEnabled(audioEnabled);
            muteAudio.textContent = audioEnabled ? "Mute" : "Unmute";
    };
    muteVideo.onclick = async () => {
            const videoEnabled = !hmsStore.getState(selectIsLocalVideoEnabled);
            await hmsActions.setLocalVideoEnabled(videoEnabled);
            muteVideo.textContent = videoEnabled ? "Hide" : "Unhide";
    };
    function onConnection(isConnected) {
            if (isConnected) {
                form.classList.add("hide");
                conference.classList.remove("hide");
                leaveBtn.classList.remove("hide");
                controls.classList.remove("hide");
        } else {
                form.classList.remove("hide");
                conference.classList.add("hide");
                leaveBtn.classList.add("hide");
                controls.classList.add("hide");
        }
    }
    hmsStore.subscribe(onConnection, selectIsConnectedToRoom);
</script>