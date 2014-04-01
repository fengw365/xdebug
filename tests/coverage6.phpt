--TEST--
Test with Code Coverage with path and branch checking
--INI--
xdebug.default_enable=1
xdebug.auto_trace=0
xdebug.trace_options=0
xdebug.trace_output_dir=/tmp
xdebug.collect_params=1
xdebug.collect_return=0
xdebug.collect_assignments=0
xdebug.auto_profile=0
xdebug.profiler_enable=0
xdebug.dump_globals=0
xdebug.show_mem_delta=0
xdebug.trace_format=0
xdebug.extended_info=1
xdebug.overload_var_dump=0
--FILE--
<?php
    xdebug_start_code_coverage(XDEBUG_CC_UNUSED | XDEBUG_CC_DEAD_CODE | XDEBUG_CC_BRANCH_CHECK);

	include 'coverage6.inc';

    xdebug_stop_code_coverage(false);
    $c = xdebug_get_code_coverage();
	ksort($c);
	var_dump($c);
?>
--EXPECTF--
A NOT B
2
1
array(2) {
  ["%scoverage6.inc"]=>
  array(2) {
    ["lines"]=>
    array(14) {
      [2]=>
      int(1)
      [4]=>
      int(1)
      [5]=>
      int(1)
      [6]=>
      int(1)
      [7]=>
      int(-1)
      [8]=>
      int(-1)
      [9]=>
      int(1)
      [11]=>
      int(1)
      [14]=>
      int(1)
      [15]=>
      int(1)
      [16]=>
      int(1)
      [18]=>
      int(1)
      [19]=>
      int(1)
      [21]=>
      int(1)
    }
    ["functions"]=>
    array(3) {
      ["{main}"]=>
      array(2) {
        ["branches"]=>
        array(1) {
          [0]=>
          array(5) {
            ["op_start"]=>
            int(0)
            ["op_end"]=>
            int(16)
            ["line_start"]=>
            int(2)
            ["line_end"]=>
            int(21)
            ["out"]=>
            array(0) {
            }
          }
        }
        ["paths"]=>
        array(1) {
          [0]=>
          array(1) {
            [0]=>
            int(0)
          }
        }
      }
      ["ok"]=>
      array(2) {
        ["branches"]=>
        array(9) {
          [0]=>
          array(5) {
            ["op_start"]=>
            int(0)
            ["op_end"]=>
            int(4)
            ["line_start"]=>
            int(2)
            ["line_end"]=>
            int(4)
            ["out"]=>
            array(2) {
              [5]=>
              int(0)
              [7]=>
              int(0)
            }
          }
          [5]=>
          array(5) {
            ["op_start"]=>
            int(5)
            ["op_end"]=>
            int(6)
            ["line_start"]=>
            int(4)
            ["line_end"]=>
            int(4)
            ["out"]=>
            array(1) {
              [7]=>
              int(0)
            }
          }
          [7]=>
          array(5) {
            ["op_start"]=>
            int(7)
            ["op_end"]=>
            int(7)
            ["line_start"]=>
            int(4)
            ["line_end"]=>
            int(4)
            ["out"]=>
            array(2) {
              [8]=>
              int(0)
              [11]=>
              int(0)
            }
          }
          [8]=>
          array(5) {
            ["op_start"]=>
            int(8)
            ["op_end"]=>
            int(10)
            ["line_start"]=>
            int(5)
            ["line_end"]=>
            int(6)
            ["out"]=>
            array(1) {
              [18]=>
              int(0)
            }
          }
          [11]=>
          array(5) {
            ["op_start"]=>
            int(11)
            ["op_end"]=>
            int(12)
            ["line_start"]=>
            int(6)
            ["line_end"]=>
            int(6)
            ["out"]=>
            array(2) {
              [13]=>
              int(0)
              [14]=>
              int(0)
            }
          }
          [13]=>
          array(5) {
            ["op_start"]=>
            int(13)
            ["op_end"]=>
            int(13)
            ["line_start"]=>
            int(6)
            ["line_end"]=>
            int(6)
            ["out"]=>
            array(1) {
              [14]=>
              int(0)
            }
          }
          [14]=>
          array(5) {
            ["op_start"]=>
            int(14)
            ["op_end"]=>
            int(14)
            ["line_start"]=>
            int(6)
            ["line_end"]=>
            int(6)
            ["out"]=>
            array(2) {
              [15]=>
              int(0)
              [18]=>
              int(0)
            }
          }
          [15]=>
          array(5) {
            ["op_start"]=>
            int(15)
            ["op_end"]=>
            int(17)
            ["line_start"]=>
            int(7)
            ["line_end"]=>
            int(8)
            ["out"]=>
            array(1) {
              [18]=>
              int(0)
            }
          }
          [18]=>
          array(5) {
            ["op_start"]=>
            int(18)
            ["op_end"]=>
            int(19)
            ["line_start"]=>
            int(9)
            ["line_end"]=>
            int(9)
            ["out"]=>
            array(0) {
            }
          }
        }
        ["paths"]=>
        array(10) {
          [0]=>
          array(5) {
            [0]=>
            int(0)
            [1]=>
            int(5)
            [2]=>
            int(7)
            [3]=>
            int(8)
            [4]=>
            int(18)
          }
          [1]=>
          array(8) {
            [0]=>
            int(0)
            [1]=>
            int(5)
            [2]=>
            int(7)
            [3]=>
            int(11)
            [4]=>
            int(13)
            [5]=>
            int(14)
            [6]=>
            int(15)
            [7]=>
            int(18)
          }
          [2]=>
          array(7) {
            [0]=>
            int(0)
            [1]=>
            int(5)
            [2]=>
            int(7)
            [3]=>
            int(11)
            [4]=>
            int(13)
            [5]=>
            int(14)
            [6]=>
            int(18)
          }
          [3]=>
          array(7) {
            [0]=>
            int(0)
            [1]=>
            int(5)
            [2]=>
            int(7)
            [3]=>
            int(11)
            [4]=>
            int(14)
            [5]=>
            int(15)
            [6]=>
            int(18)
          }
          [4]=>
          array(6) {
            [0]=>
            int(0)
            [1]=>
            int(5)
            [2]=>
            int(7)
            [3]=>
            int(11)
            [4]=>
            int(14)
            [5]=>
            int(18)
          }
          [5]=>
          array(4) {
            [0]=>
            int(0)
            [1]=>
            int(7)
            [2]=>
            int(8)
            [3]=>
            int(18)
          }
          [6]=>
          array(7) {
            [0]=>
            int(0)
            [1]=>
            int(7)
            [2]=>
            int(11)
            [3]=>
            int(13)
            [4]=>
            int(14)
            [5]=>
            int(15)
            [6]=>
            int(18)
          }
          [7]=>
          array(6) {
            [0]=>
            int(0)
            [1]=>
            int(7)
            [2]=>
            int(11)
            [3]=>
            int(13)
            [4]=>
            int(14)
            [5]=>
            int(18)
          }
          [8]=>
          array(6) {
            [0]=>
            int(0)
            [1]=>
            int(7)
            [2]=>
            int(11)
            [3]=>
            int(14)
            [4]=>
            int(15)
            [5]=>
            int(18)
          }
          [9]=>
          array(5) {
            [0]=>
            int(0)
            [1]=>
            int(7)
            [2]=>
            int(11)
            [3]=>
            int(14)
            [4]=>
            int(18)
          }
        }
      }
      ["loop_test"]=>
      array(2) {
        ["branches"]=>
        array(3) {
          [0]=>
          array(5) {
            ["op_start"]=>
            int(0)
            ["op_end"]=>
            int(2)
            ["line_start"]=>
            int(11)
            ["line_end"]=>
            int(14)
            ["out"]=>
            array(1) {
              [3]=>
              int(0)
            }
          }
          [3]=>
          array(5) {
            ["op_start"]=>
            int(3)
            ["op_end"]=>
            int(7)
            ["line_start"]=>
            int(14)
            ["line_end"]=>
            int(15)
            ["out"]=>
            array(2) {
              [8]=>
              int(0)
              [3]=>
              int(0)
            }
          }
          [8]=>
          array(5) {
            ["op_start"]=>
            int(8)
            ["op_end"]=>
            int(9)
            ["line_start"]=>
            int(16)
            ["line_end"]=>
            int(16)
            ["out"]=>
            array(0) {
            }
          }
        }
        ["paths"]=>
        array(2) {
          [0]=>
          array(3) {
            [0]=>
            int(0)
            [1]=>
            int(3)
            [2]=>
            int(8)
          }
          [1]=>
          array(4) {
            [0]=>
            int(0)
            [1]=>
            int(3)
            [2]=>
            int(3)
            [3]=>
            int(8)
          }
        }
      }
    }
  }
  ["%scoverage6.php"]=>
  array(2) {
    [4]=>
    int(1)
    [6]=>
    int(1)
  }
}
