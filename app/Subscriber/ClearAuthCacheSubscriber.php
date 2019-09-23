<?php

/**
 * WeEngine Document System
 *
 * (c) We7Team 2019 <https://www.w7.cc>
 *
 * This is not a free software
 * Using it under the license terms
 * visited https://www.w7.cc for more details
 */

namespace W7\App\Subscriber;

class ClearAuthCacheSubscriber extends Subscriber
{
	public function run($event)
	{
		icache()->del('auth_'.$event->user_id);
		icache()->del('document_users_'.$event->document_id);
	}
}
