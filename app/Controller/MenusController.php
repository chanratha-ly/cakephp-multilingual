<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MenusController
 *
 * @author apple
 */
class MenusController extends AppController {
    
    public function index ($lang) {
        CakeSession::write('Config.language', $lang);
//        if ($lang == "jp") {
//            setlocale("LC_ALL", "ja_JP.utf8");
//        }
//        else {
//            setlocale("LC_ALL", "En-Us.utf8");
//        }
    }
}

?>
