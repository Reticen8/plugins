{% if helpers.exists('Reticen8.HAProxy.general.enabled') and Reticen8.HAProxy.general.enabled|default("0") == "1" %}
haproxy_enable=YES
haproxy_setup="/usr/local/reticen8/scripts/Reticen8/HAProxy/setup.sh"
haproxy_pidfile="/var/run/haproxy.pid"
haproxy_config="/usr/local/etc/haproxy.conf"
{% if helpers.exists('Reticen8.HAProxy.general.storeOcsp') and Reticen8.HAProxy.general.storeOcsp|default("0") == "1" %}
haproxy_ocsp=YES
{% else %}
haproxy_ocsp=NO
{% endif %}
{% if helpers.exists('Reticen8.HAProxy.general.gracefulStop') and Reticen8.HAProxy.general.gracefulStop|default("0") == "1" %}
haproxy_hardstop=NO
{% else %}
haproxy_hardstop=YES
{% endif %}
{% if helpers.exists('Reticen8.HAProxy.general.seamlessReload') and Reticen8.HAProxy.general.seamlessReload|default("0") == "1" %}
haproxy_socket="/var/run/haproxy.socket"
haproxy_softreload=YES
{% else %}
haproxy_softreload=NO
{% endif %}
{% else %}
haproxy_enable=NO
{% endif %}
