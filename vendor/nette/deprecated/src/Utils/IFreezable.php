<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

namespace Nette;


/**
 * @deprecated
 */
interface IFreezable
{

	/**
	 * Makes the object unmodifiable.
	 * @return void
	 */
	function freeze();

	/**
	 * Is the object unmodifiable?
	 * @return bool
	 */
	function isFrozen();

}
