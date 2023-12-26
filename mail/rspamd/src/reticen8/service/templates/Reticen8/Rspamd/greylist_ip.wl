{% if helpers.exists('Reticen8.Rspamd.general.enabled') and Reticen8.Rspamd.general.enabled == '1' and helpers.exists('Reticen8.Rspamd.graylist.whitelist_ip') and Reticen8.Rspamd.graylist.whitelist_ip != '' %}
{%   for host in Reticen8.Rspamd.graylist.whitelist_ip.split(',') %}
{{ host }}
{%   endfor %}
{% endif %}
