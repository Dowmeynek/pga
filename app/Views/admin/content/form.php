<form>

    <label for="idnum">Borrowers ID Number:</label>
    <input type="text" id="idnum" name="idnum" required>
    <!-- User Information -->
    <label for="user_name">Borrowers Name:</label>
    <input type="text" id="user_name" name="user_name" required>

    <label for="contact_number">Contact Number:</label>
    <input type="tel" id="contact_number" name="contact_number" required>

    <!-- Book Information -->
    <label for="book_name">Book Name:</label>
    <input type="text" id="book_name" name="book_name" required>

    <label for="author">Author:</label>
    <input type="text" id="author" name="author" required>
    <!-- borrowed Date -->
    <label for="borrowed_date">Borrowed Date:</label>
    <input type="date" id="borrowed_date" name="borrowed_date" required>

    <!-- Return Date -->
    <label for="return_date">Return Date:</label>
    <input type="date" id="return_date" name="return_date" required>

    <!-- Submit Button -->
    <button type="submit">Borrow Book</button>



</form>