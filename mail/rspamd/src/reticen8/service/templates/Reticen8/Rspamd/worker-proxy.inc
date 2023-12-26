{% if helpers.exists('Reticen8.Rspamd.general.enabled') and Reticen8.Rspamd.general.enabled == '1' %}
upstream "local" {
  default = yes;
  hosts = "/var/run/rspamd/normal.sock";
}
bind_socket = "/var/run/rspamd/milter.sock mode=0666 owner=rspamd";
{% endif %}
