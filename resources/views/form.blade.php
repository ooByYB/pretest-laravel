<h2>Buat Account Baru</h2>
<h4>Sign Up Form</h4>

<form method="" action="{{ route('get-welcome') }}">
    <label for="first-name">First name:</label><br><br>
    <input type="text" id="first-name" name="first_name" required><br><br>

    <label for="last-name">Last name:</label><br><br>
    <input type="text" id="last-name" name="last_name" required><br><br>

    <label>Gender</label><br><br>
    <input type="radio" id="male" name="gender" value="male" required>
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="female" required>
    <label for="female">Female</label><br><br>

    <label for="nationality">Nationality</label><br><br>
    <select id="nationality" name="nationality" required>
        <option value="indonesia">Indonesia</option>
        <option value="usa">Amerika</option>
        <option value="uk">Inggris</option>
    </select><br><br>

    <label>Language Spoken</label><br><br>
    <input type="checkbox" id="english" name="languages[]" value="english">
    <label for="english">Bahasa Indonesia</label><br>
    <input type="checkbox" id="spanish" name="languages[]" value="spanish">
    <label for="spanish">English</label><br>
    <input type="checkbox" id="french" name="languages[]" value="french">
    <label for="french">Other</label>

    <br><br>
    <label for="bio">Bio</label><br><br>
    <textarea id="bio" name="bio" rows="4" cols="50" required></textarea><br><br>

    <input type="submit" value="Sign Up">
    </form>
</body>