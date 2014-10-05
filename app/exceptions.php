<?php

namespace
{
	class NotSupportedException extends \LogicException
	{

	}


	class DeprecatedException extends NotSupportedException
	{

	}
}

namespace Fitak
{
	class DuplicateEntryException extends \RuntimeException
	{

	}
}
