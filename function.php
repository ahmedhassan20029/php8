<?php
function getTitle() {

    global $titlePage;

    if(isset($titlePage)) {

        print $titlePage;

    } else {

        print 'name title';

    }
}