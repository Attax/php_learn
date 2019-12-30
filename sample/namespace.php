<?php
    require('1.php');
    require('2.php');
    //导入函数并命名
    use function Microsoft\windows\showSys as showWindows;
    use function Apple\mac\showSys as showMac;
    
    showWindows();
    showMac();