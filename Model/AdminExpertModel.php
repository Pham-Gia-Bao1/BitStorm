<?php
include_once("../Model/ConnectDataBase.php");

class Expert extends Connection
{
    public function get_all_experts()
    {
        $this->connect_database();
        $sql_query = "SELECT * FROM experts";
        $stmt = $this->conn->prepare($sql_query);
        $stmt->execute();
        $experts = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $experts;
    }

    public function createExpert($full_name, $gender, $address, $email, $phone_number, $age, $experience, $profile_picture, $count_rating, $certificate, $specialization)
    {
        try {
            $stmt = $this->conn->prepare("INSERT INTO experts (role_id,
                full_name, gender, address, email, phone_number, age, experience, profile_picture, count_rating, certificate, specialization, status ) 
                VALUES (3,:full_name, :gender, :address, :email, :phone_number, :age, :experience,:profile_picture, :count_rating, :certificate, :specialization, 'Hoạt động')");

            $stmt->bindParam(':full_name', $full_name);
            $stmt->bindParam(':gender', $gender);
            $stmt->bindParam(':address', $address);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone_number', $phone_number);
            $stmt->bindParam(':age', $age);
            $stmt->bindParam(':experience', $experience);
            $stmt->bindParam(':profile_picture', $profile_picture);
            $stmt->bindParam(':count_rating', $count_rating);
            $stmt->bindParam(':certificate', $certificate);
            $stmt->bindParam(':specialization', $specialization);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    public function updateExpert($id, $full_name, $gender, $address, $email, $phone_number, $age, $experience, $profile_picture, $count_rating, $certificate, $specialization, $status)
    {
        try {
            $update_query = "UPDATE experts SET
                full_name = :full_name, gender = :gender, address = :address, email = :email,
                phone_number = :phone_number, age = :age, experience = :experience,
                profile_picture = :profile_picture, count_rating = :count_rating,
                certificate = :certificate, specialization = :specialization, status = :status
                WHERE id = :id";
   
            $stmt = $this->conn->prepare($update_query);

            $stmt->bindParam(':full_name', $full_name);
            $stmt->bindParam(':gender', $gender);
            $stmt->bindParam(':address', $address);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone_number', $phone_number);
            $stmt->bindParam(':age', $age);
            $stmt->bindParam(':experience', $experience);
            $stmt->bindParam(':profile_picture', $profile_picture);
            $stmt->bindParam(':count_rating', $count_rating);
            $stmt->bindParam(':certificate', $certificate);
            $stmt->bindParam(':specialization', $specialization);
            $stmt->bindParam(':status', $status);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
}
