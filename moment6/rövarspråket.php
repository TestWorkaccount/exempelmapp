
<script>
    function someFunc()
    {
        if(true){
            return 1;
        }
    }
</script>

<?php

    $text = "jag heter bibbi cici";

    function översättTillRövarspråk($text)
    {
        $nyText = "";
        $pattern = "/[qwrtpsdfghjklzxcvbnm]/i";
        for($i = 0; $i < strlen($text); $i++)
        {
            
            if(preg_match($pattern, $text[$i]))
            if(in_array($text[$i], ['q', 'w', 'r', 't', 'p', 's', 'd', 'f', 'g', 'h', 'j','k', 'l', 'z', 'x','c', 'v', 'b','n','m']))
            {
                $nyText .= "$text[$i]o$text[$i]";
            }
            else
            {
                $nyText .= $text[$i];
            }
        }
        
        return $nyText;
    }

    echo översättTillRövarspråk($text);

?>
