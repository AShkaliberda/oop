
<div class="wrapper">
    <?php foreach($data as $row): ?>
    <h3><?=$row[0]; ?></h3>

    <form class="form-horizontal" method="POST" action="quest2.php">
        <div class="checkbox">
            <label><input type="checkbox" name="answer" value="<?=$answer['points']; ?>"><span> <?=$answer['text']; ?></span></label>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary" id="submit">Далі</button>
            </div>
        </div>
    </form>
    <?endforeach; ?>
</div>