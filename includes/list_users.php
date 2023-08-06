<?php
    require_once 'config.php';

    $stmt = $conn->prepare("SELECT id, name, email FROM users");
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>";
        echo "<a href='edit_user.php?id=" . $row['id'] . "' class='btn btn-sm btn-primary mr-2'>Editar</a>";
        echo "<a href='delete_user.php?id=" . $row['id'] . "' class='btn btn-sm btn-danger'>Excluir</a>";
        echo "</td>";
        echo "</tr>";
    }
?>
