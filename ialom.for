$TTL 1D
@	IN SOA	mail.ialom.com. root.ialom.com. (
					0	; serial
					1D	; refresh
					1H	; retry
					1W	; expire
					3H )	; minimum

@		IN	NS		mail.ialom.com.
@		IN	A		10.0.0.7
@		IN	MX	10	mail.ialom.com.
mail.ialom.com.	IN	A		10.0.0.7
webmail		IN	CNAME		mail.ialom.com.

