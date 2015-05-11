<div class="container">
    <p class="text-center">
        &copy; Campusbox 2015.
        Server time is <span id="hours">0</span>:<span id="minutes">0</span>:<span id="seconds">0</span>.
        There are <span id="items"><?php echo $number ?></span> items in Campusbox.
    </p>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<?php
$this->carabiner->js('bootstrap.js');
$this->carabiner->js('disable_button.js');
$this->carabiner->js('campusbox.js');

$this->carabiner->display('js');
$this->carabiner->empty_cache('both','yesterday');
?>
</body>
</html>
