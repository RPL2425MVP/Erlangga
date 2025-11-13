<?php

class PHP_Email_Form {
    public $to;
    public $from_name;
    public $from_email;
    public $subject;
    public $ajax;

    private $messages= array();

    public function add_message($content, $label, $length = 0) {
        if (!empty($content)) {
            $this->messages[] = "$label: $content";
        }
    }

    public function send() {
        $token = '7631442718:AAGA1X9CgwJYJeAmdWiHstXfQKkQZwxRHf8';
        $chat_id = '7616769841';

        $text = "📢 *New Message from Website*\n\n";
        foreach($this->messages as $msg) {
            $text .= "> : " . $msg . "\n";
        }

        $url = "https://api.telegram.org/bot$token/sendMessage";
        $data = [
            'chat_id' => $chat_id,
            'text' => $text,
            'parse_mode' => 'Markdown'
        ];

        $options = [
            'http' => [
                'method' => 'POST',
                'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
                'content' => http_build_query($data),
            ]
        ];

        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);

        if ($result) {
            return 'OK';
        } else {
            return 'Failed to send Telegram Message,';
        }
    }
}

?>