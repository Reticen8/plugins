{% if helpers.exists('Reticen8.Rspamd.general.enabled') and Reticen8.Rspamd.general.enabled == '1' %}
bind_socket = "/var/run/rspamd/normal.sock mode=0666 owner=rspamd";
{% endif %}
