<?php
include 'db.php';
if (isset($_POST['signin'])) {
    $email = $_POST['email'] ?? null;
    $password = $_POST['password'] ?? null;
    $id = $_POST['id'] ?? null;
    $matricule = $_POST['matricule'] ?? null;

    // Vérifier les admins
    if ($email && $password) {
        $sql = "SELECT * FROM admins WHERE email='$email' AND password='$password'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            session_start();
            $row = $result->fetch_assoc();
            $_SESSION['email'] = $row['email'];
            header("Location: admin_home.php");
            exit();
        }
    }

    // Vérifier les enseignants
    if ($id && $password) {
        $sql = "SELECT * FROM teachers WHERE id='$id' AND password='$password'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            session_start();
            $row = $result->fetch_assoc();
            $_SESSION['id'] = $row['id'];
            header("Location: teacher_home.php");
            exit();
        }
    }

    // Vérifier les étudiants
    if ($matricule && $password) {
        $sql = "SELECT * FROM students WHERE matricule='$matricule' AND password='$password'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            session_start();
            $row = $result->fetch_assoc();
            $_SESSION['matricule'] = $row['matricule'];
            header("Location: student_home.php");
            exit();
        }
    }

    // Si aucun utilisateur trouvé
    echo "Not Found,or Incorrect  Password";
}
?>
