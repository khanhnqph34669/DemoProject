<h1>Liên hệ</h1>
    <p>Nhập thông tin liên hệ của bạn dưới đây:</p>
    <form action="process_contact.php" method="post">
        <label for="name">Họ và tên:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Nội dung tin nhắn:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <input type="submit" value="Gửi">
    </form>