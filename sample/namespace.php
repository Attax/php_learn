<?php
    require('1.php');
    require('2.php');
    //导入类并命名
    use Microsoft\windows\windowsXP\Computer as windows;
    use Apple\mac\Macintosh\Computer as mac;
    
    new windows();
    new mac();