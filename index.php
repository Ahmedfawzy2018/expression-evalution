<?

class EvaluationSolution {

    function eval($tokens) {
        $stack = [];
        foreach($tokens as $el) {
            if(is_numeric($el))
                $stack[] = $el;
            else {
                $n1= array_pop($stack);
                if($el == "+")
                    $result = array_pop($stack) + $n1;
                elseif($el == "-")
                    $result = array_pop($stack) - $n1;
                elseif($el == "*")
                    $result = array_pop($stack) * $n1;
                elseif($el == "/")
                    $result = (int) (array_pop($stack) / $n1);
                $stack[] = $result;
            }
        }
        return array_pop($stack);
    }
}