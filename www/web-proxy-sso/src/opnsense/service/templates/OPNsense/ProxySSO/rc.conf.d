{% if helpers.exists('Reticen8.ProxySSO.EnableSSO') and Reticen8.ProxySSO.EnableSSO|default("0") == "1" %}
squid_krb5_ktname="/usr/local/etc/squid/squid.keytab"
{% endif %}
