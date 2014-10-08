<?php
class HTMLView {

    public function echoHTML($body) {
        if ($body === NULL) {
            throw new \Exception("HTMLView::echoHTML does not allow body to be null");
        }


        echo "
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset=\"UTF-8\">
        </head>
        <body>
        <h1>Den glada piraten</h1>
        $body
        </body>
        </html>";
    }
}
