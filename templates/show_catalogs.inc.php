<?php
/* vim:set softtabstop=4 shiftwidth=4 expandtab: */
/**
 *
 * LICENSE: GNU General Public License, version 2 (GPLv2)
 * Copyright 2001 - 2013 Ampache.org
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License v2
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 */
?>
<?php if ($browse->get_show_header()) require AmpConfig::get('prefix') . '/templates/list_header.inc.php'; ?>
<table class="tabledata" cellpadding="0" cellspacing="0">
    <thead>
        <tr class="th-top">
            <th class="cel_catalog essential persist"><?php echo T_('Name'); ?></th>
            <th class="cel_info essential"><?php echo T_('Info'); ?></th>
            <th class="cel_lastverify optional"><?php echo T_('Last Verify'); ?></th>
            <th class="cel_lastadd optional"><?php echo T_('Last Add'); ?></th>
            <th class="cel_lastclean optional "><?php echo T_('Last Clean'); ?></th>
            <th class="cel_action cel_action_text essential"><?php echo T_('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($object_ids as $catalog_id) {
                $catalog = Catalog::create_from_id($catalog_id);
                $catalog->format();
        ?>
        <tr class="<?php echo UI::flip_class(); ?>" id="catalog_<?php echo $catalog->id; ?>">
            <?php require AmpConfig::get('prefix') . '/templates/show_catalog_row.inc.php'; ?>
        </tr>
        <?php } ?>
        <tr class="<?php echo UI::flip_class(); ?>">
            <td colspan="6">
            <?php if (!count($object_ids)) { ?>
                <span class="nodata"><?php echo T_('No catalog found'); ?></span>
            <?php } ?>
            </td>
        </tr>
    </tbody>
    <tfoot>
        <tr class="th-bottom">
            <th class="cel_catalog"><?php echo T_('Name'); ?></th>
            <th class="cel_info"><?php echo T_('Info'); ?></th>
            <th class="cel_lastverify"><?php echo T_('Last Verify'); ?></th>
            <th class="cel_lastadd"><?php echo T_('Last Add'); ?></th>
            <th class="cel_lastclean"><?php echo T_('Last Clean'); ?></th>
            <th class="cel_action cel_action_text"><?php echo T_('Actions'); ?></th>
        </tr>
    </tfoot>
</table>
<script language="javascript" type="text/javascript">$('.tabledata').mediaTable();</script>
<?php if ($browse->get_show_header()) require AmpConfig::get('prefix') . '/templates/list_header.inc.php'; ?>
