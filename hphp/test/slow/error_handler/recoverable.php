<?php

set_error_handler(function($errno, $errmsg) {
	var_dump($errno == E_RECOVERABLE_ERROR);
}, E_RECOVERABLE_ERROR);

class X {
  function test(self $s) {
    var_dump($s);
  }
}
X::test("hello");
