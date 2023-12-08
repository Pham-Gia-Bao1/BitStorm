<script>
         $(document).ready(function() {
      var suggestionsVisible = false; // Biến để theo dõi trạng thái danh sách gợi ý

      $(".input_search").on("input", function() {
        var searchTerm = $(this).val();

        if (searchTerm === "") {
          clearSuggestions();
        } else {
          $.ajax({
            url: 'http://localhost/WEB_PHP/Controller/SuggestController.php',
            type: "GET",
            data: {
              search: searchTerm
            },
            dataType: "json",
            success: function(response) {
              showSuggestions(response);
            }
          });
        }
      });

      $(document).on("mousedown", function(event) {
        var target = $(event.target);
        var isInputSearch = target.closest(".input_search").length > 0;
        var isSuggestionItem = target.hasClass("suggestion_item");

        if (!isInputSearch && !isSuggestionItem) {
          clearSuggestions();
        }
      });

      $(".input_search").on("focus", function() {
        var searchTerm = $(this).val();

        if (searchTerm === "") {
          showDefaultSuggestions();
        }
      });

      $(".input_search").on("blur", function() {
        // Kiểm tra xem người dùng đã nhấn vào `.suggestion_box` hay không
        if (!$(this).closest(".box_search").find(".suggestion_box").is(":focus-within")) {
          clearSuggestions();
        }
      });

      $(document).on("mousedown", ".suggestion_item", function() {
        var suggestionValue = $(this).text();
        $(".input_search").val(suggestionValue);
        clearSuggestions();
      });

      function showDefaultSuggestions() {
        var defaultSuggestions = ["Suggestion 1", "Suggestion 2", "Suggestion 3", "Suggestion 4", "Suggestion 5"];
        showSuggestions(defaultSuggestions);
      }

      function showSuggestions(suggestions) {
        var suggestionList = $(".suggestion_box");
        suggestionList.empty();

        suggestions.forEach(function(suggestion) {
          var listItem = $("<li>").addClass("suggestion_item").text(suggestion);
          suggestionList.append(listItem);
        });

        suggestionsVisible = true; // Cập nhật trạng thái danh sách gợi ý
        suggestionList.show(); // Hiển thị danh sách gợi ý
      }

      function clearSuggestions() {
        var suggestionList = $(".suggestion_box");
        suggestionList.empty();
        suggestionsVisible = false; // Cập nhật trạng thái danh sách gợi ý
        suggestionList.hide(); // Ẩn danh sách gợi ý
      }
    });

</script>