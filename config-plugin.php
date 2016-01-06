<?php
/**
 * Configuration for the Markdown Parser twig filter. Markdown Parser from Carsten Brandt https://github.com/cebe
 *
 * @author Matthew Seremet
 * @link https://github.com/frostbitten
 */
 
$twig = $app->view()->getEnvironment();
$twig->addFilter(new \Twig_SimpleFilter('md', function ($input, $type) {
	if($type == "git"){
		$parser = new \cebe\markdown\GithubMarkdown();
	}elseif($type == "extra"){
		$parser = new \cebe\markdown\MarkdownExtra();
	}else{
		$parser = new \cebe\markdown\Markdown();
	}
	return $parser->parse($input);
}));