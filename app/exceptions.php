<?php

namespace
{
	class NotSupportedException extends \LogicException
	{

	}


	class DeprecatedException extends NotSupportedException
	{

	}

	class ImplementationException extends \LogicException
	{

	}
}

namespace Fitak
{
	class DuplicateEntryException extends \RuntimeException
	{

	}

	class InvalidAccessTokenException extends \RuntimeException
	{

	}

	class InvalidStateException extends \RuntimeException
	{

	}

	class IOException extends \RuntimeException
	{

	}

	class HttpException extends IOException
	{

	}
}
