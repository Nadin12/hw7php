<div class="container">
    <div><img src="img/baby.png" alt="baby"></div>
    <form method="post">
        <div class="write">
            <div>
                <label for="name">Имя</label>
                <input type="text" id="name" name="firstname" placeholder="Введите имя" required>
                <?php if (!empty($errors['name'])): ?>
                    <div class="error"><?= $errors['name']; ?></div>
                <?php endif; ?>
            </div>
            <div>
                <label>Пол</label>
                <input type="radio" id="male" name="gender" value="мальчик" required>
                <label for="male">Мальчик</label>
                <input type="radio" id="female" name="gender" value="девочка" required>
                <label for="female">Девочка</label>
                <?php if (!empty($errors['gender'])): ?>
                    <div class="error"><?= $errors['gender']; ?></div>
                <?php endif; ?>
            </div>
        <input type="submit" name="submit" value="Добавить имя">
        </div>
    </form>
</div>
<div class="columns state">
    <div class="column girl">
        <h2>Имена девочек</h2>
        <ul class="square-girl">
            <?php if (!empty($girl_names)): ?>
                <?php foreach ($girl_names as $girl): ?>
                    <li><?= htmlspecialchars($girl) ?></li>
                <?php endforeach; ?>
            <?php else: ?>
                <li>Нет имен в файле.</li>
            <?php endif; ?>
        </ul>
    </div>
    <div class="column boy">
        <h2>Имена мальчиков</h2>
        <ul class="square-boy">
            <?php if (!empty($boy_names)): ?>
                <?php foreach ($boy_names as $boy): ?>
                    <li><?= htmlspecialchars($boy) ?></li>
                <?php endforeach; ?>
            <?php else: ?>
                <li>Нет имен в файле.</li>
            <?php endif; ?>
        </ul>
    </div>
</div>
