# Please don't modify this file as your changes might be overwritten with
# the next update.
#

dns {
         nameserver = [{{ "'" + ("','".join(Reticen8.Rspamd.general.nameserver.split(','))) + "'" }}];
}
