<?php
function start_page($title)
{
    echo ' <!DOCTYPE html> <html
    lang="fr"><head><title>' . PHP_EOL . $title . '</title></head><body>' . PHP_EOL;

};

function end_page ($title)
{
    echo ' <!DOCTYPE html> <html
lang="fr"><hr><br><strong>' . PHP_EOL . $title . '</br></hr></strong><body>' . PHP_EOL
    ;
};
?>