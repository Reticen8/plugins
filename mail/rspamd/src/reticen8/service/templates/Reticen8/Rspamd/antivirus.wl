{% if helpers.exists('Reticen8.Rspamd.general.enabled') and Reticen8.Rspamd.general.enabled == '1' and helpers.exists('Reticen8.Rspamd.av.whitelist') and Reticen8.Rspamd.av.whitelist != '' %}
{%   for host in Reticen8.Rspamd.av.whitelist.split(',') %}
{{ host }}
{%   endfor %}
{% endif %}
