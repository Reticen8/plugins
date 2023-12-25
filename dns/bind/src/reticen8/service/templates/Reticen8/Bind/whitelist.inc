{% if helpers.exists('Reticen8.bind.general.enabled') and Reticen8.bind.general.enabled == '1' %}
{%   if helpers.exists('Reticen8.bind.dnsbl.enabled') and Reticen8.bind.dnsbl.enabled == '1' %}
{%     if helpers.exists('Reticen8.bind.dnsbl.type') and Reticen8.bind.dnsbl.type != '' %}
{%       if helpers.exists('Reticen8.bind.dnsbl.whitelists') and Reticen8.bind.dnsbl.whitelists != '' %}
{%         for whitelist in Reticen8.bind.dnsbl.whitelists.split(',') %}
{{ whitelist }}		IN	CNAME	rpz-passthru.
*.{{ whitelist }}	IN	CNAME	rpz-passthru.
{%         endfor %}
{%       endif %}
{%     endif %}
{%   endif %}
{% endif %}
