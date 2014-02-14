<?php
require('src/lightncandy.inc');
$template = <<<VAREND
This is {{win[ner.test1}} ....
That is {{win]ner.test2}} ....
That is {{wi[n]ner.test3}} ....
That is {{[winner].test4}} ....
That is {{winner].[test5]}} ....
That is {{winner[.test6]}} ....

<ul>
{{#each item}}<li>{{name}}</li>
</ul>
VAREND
;
$php = LightnCandy::compile($template, Array('flags' => LightnCandy::FLAG_ERROR_LOG | LightnCandy::FLAG_STANDALONE | LightnCandy::FLAG_HANDLEBARSJS));

echo "Template is:\n$template\n\n";
echo "Rendered PHP code is:\n$php\n\n";
echo 'LightnCandy Context:';
print_r(LightnCandy::getContext());

?>
