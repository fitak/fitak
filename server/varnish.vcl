# This is a VCL configuration file for varnish.  See the vcl(7)
# man page for details on VCL syntax and semantics.

backend default {
    .host = "127.0.0.1";
    .port = "8080";
}

sub vcl_hash {
	hash_data(req.url);
	return (hash);
}

sub vcl_recv {
    if (req.request != "GET") {
        return (pass);
    }
    if (!(req.url ~ "(/|/about)(\?|#|$)"))
    {
        return (pass);
    }

    return (lookup);
}

sub vcl_fetch {
	unset beresp.http.cache-control;
	unset beresp.http.pragma;
	unset beresp.http.set-cookie;
	set beresp.ttl = 15m;
}
