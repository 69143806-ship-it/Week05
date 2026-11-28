
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $date = $_POST['date'] ?? '';
    $session = $_POST['session'] ?? '';
    $topics = $_POST['topics'] ?? [];
    $comment = $_POST['comment'] ?? '';

    function safe($value) {
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }

    echo "<h1>ข้อมูลการสมัครอบรม</h1>";

    echo "ชื่อ-นามสกุล: " . safe($name) . "<br>";
    echo "อีเมล: " . safe($email) . "<br>";
    echo "เบอร์โทรศัพท์: " . safe($phone) . "<br>";
    echo "วันเข้าร่วม: " . safe($date) . "<br>";
    echo "รอบอบรม: " . safe($session) . "<br>";

    echo "หัวข้อ: ";

    if (is_array($topics) && count($topics) > 0) {
        foreach ($topics as $topic) {
            echo safe($topic) . " ";
        }
    } else {
        echo "ไม่ได้เลือกหัวข้อ";
    }

    echo "<br>";
    echo "ความคิดเห็น: " . safe($comment) . "<br>";

    echo "<br><a href='form.html'>กรอกแบบฟอร์มอีกครั้ง</a>";

} else {
    echo "กรุณาส่งข้อมูลผ่านแบบฟอร์ม";
}
?>
