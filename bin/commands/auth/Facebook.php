<?php

namespace Bin\Commands\Auth;

use Fitak\Crawler\Facebook as FbCrawler;
use Bin\Commands\Command;
use KeyValueStorage;
use Symfony\Component\Console\Helper\QuestionHelper;
use Symfony\Component\Console\Question\Question;




class Facebook extends Command
{

	protected function configure()
	{
		$this->setName('auth:facebook');
	}

	public function invoke(FbCrawler $fb, KeyValueStorage $kvs)
	{
		$url = $fb->getLoginUrl();
		$this->out->writeln('<info>Open the following url in browser and authenticate:</info>');
		$this->out->writeln("  $url");
		$this->out->writeln("<info>Once you are done and redirected to http://copy.this.url, copy the full url and paste it here.</info>\n");

		$helper = new QuestionHelper();
		$question = new Question('Return url: ');
		$url = $helper->ask($this->in, $this->out, $question);

		$accessToken = $fb->getAccessTokenFromUrl($url)->extend();
		$this->out->writeln("<info>Extended access token: $accessToken</info>");

		$exp = $accessToken->getExpiresAt();
		$kvs->save($kvs::FACEBOOK_ACCESS_TOKEN, (string) $accessToken);
		$kvs->save($kvs::FACEBOOK_ACCESS_TOKEN_EXPIRES, $exp->getTimestamp());

		$date = $exp->format('c');
		$this->out->writeln("Token expires at $date");
	}

}
