<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<style>
/* VIEW-ONLY LAYOUT V3 — isolated so dispatcher CSS cannot overlap headings */
html, body { margin: 0; padding: 0; height: 100%; overflow: hidden; font-family: Arial, Helvetica, sans-serif; }
#content, .container_content { width: 100% !important; max-width: 100% !important; margin: 0 !important; padding: 0 !important; }
.loader { display: none; }

.vo-topbar {
    height: 56px;
    background: #fff;
    border-bottom: 1px solid #e5e5e5;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 16px;
    position: relative;
    z-index: 20;
}
.vo-topbar img { height: 42px; }
.vo-topbar .vo-user a { margin-left: 12px; color: #333; }

#vo-app {
    height: calc(100vh - 56px);
    display: flex;
    flex-direction: column;
    background: #fff;
    overflow: hidden;
}
.vo-main {
    display: flex;
    flex: 1 1 58%;
    min-height: 280px;
    position: relative;
}
.vo-map-wrap {
    flex: 1 1 auto;
    min-width: 0;
    position: relative;
}
#map-canvas {
    width: 100% !important;
    height: 100% !important;
}
.vo-vehicle-bar {
    position: absolute;
    top: 8px;
    left: 8px;
    z-index: 5;
    background: #ea9c0e;
    padding: 4px 8px;
}
.vo-vehicle-bar select { height: 28px; font-size: 12px; }

.vo-right {
    width: 260px;
    flex: 0 0 260px;
    border-left: 1px solid #ddd;
    display: flex;
    flex-direction: column;
    background: #fff;
    z-index: 6;
}
#all_drivers { flex: 1 1 auto; overflow-y: auto; }
#all_drivers h4 {
    margin: 0;
    padding: 8px 10px;
    background: #ea9c0e;
    font-size: 13px;
    font-weight: bold;
}
#all_drivers ul.driver_details { list-style: none; margin: 0; padding: 0; }
#all_drivers ul.driver_details li {
    display: flex !important;
    align-items: center;
    justify-content: space-between;
    gap: 6px;
    padding: 8px 10px;
    border-bottom: 1px solid #eee;
    float: none !important;
    position: static !important;
    overflow: hidden;
}
#all_drivers ul.driver_details li span {
    display: inline-block;
    float: none !important;
    position: static !important;
}
#all_drivers ul.driver_details li span:first-child { flex: 1 1 auto; min-width: 0; font-size: 12px; }
#all_drivers ul.driver_details li span:first-child p { margin: 0; font-size: 11px; }
#all_drivers .driver_status_active,
#all_drivers .driver_status_in,
#all_drivers .driver_status_out,
#all_drivers .driver_status_busy {
    padding: 2px 8px;
    border-radius: 3px;
    color: #fff;
    font-size: 11px;
    white-space: nowrap;
}
#all_drivers .driver_status_active { background: #ea9c0e; }
#all_drivers .driver_status_in { background: #2e7d32; }
#all_drivers .driver_status_out { background: #1565c0; }
#all_drivers .driver_status_busy { background: #c62828; }

.vo-earn { display: flex; border-top: 1px solid #ddd; }
.vo-earn > div { flex: 1; padding: 6px 8px; }
.vo-earn h4 { margin: 0 0 4px; background: #ea9c0e; padding: 4px 6px; font-size: 12px; }
.vo-earn ul { list-style: none; margin: 0; padding: 0; font-size: 13px; }

.vo-bottom { flex: 0 0 42%; min-height: 180px; display: flex; flex-direction: column; border-top: 1px solid #ccc; }
.vo-filters {
    background: #fff;
    padding: 6px 8px;
    display: flex;
    flex-wrap: wrap;
    gap: 8px 14px;
    align-items: center;
    font-size: 12px;
}
.vo-filters label {
    font-weight: normal;
    margin: 0;
    display: inline-flex;
    align-items: center;
    gap: 4px;
    white-space: nowrap;
}
.vo-filters [class^="heading_icon_"] {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 16px;
    height: 16px;
    border-radius: 2px;
}
.vo-filters [class^="heading_icon_"] input {
    margin: 0;
    width: 14px;
    height: 14px;
    cursor: pointer;
}
.heading_icon_one { background: #1298ff; }
.heading_icon_one input { accent-color: #1298ff; }
.heading_icon_two { background: #1339f9; }
.heading_icon_two input { accent-color: #1339f9; }
.heading_icon_four { background: #12ff00; }
.heading_icon_four input { accent-color: #12ff00; }
.heading_icon_five { background: #f9c213; }
.heading_icon_five input { accent-color: #f9c213; }
.heading_icon_six { background: #ff9600; }
.heading_icon_six input { accent-color: #ff9600; }
.heading_icon_sevan { background: #07841e; }
.heading_icon_sevan input { accent-color: #07841e; }
.heading_icon_eight { background: #f91313; }
.heading_icon_eight input { accent-color: #f91313; }
.heading_icon_nine { background: #844d06; }
.heading_icon_nine input { accent-color: #844d06; }
.vo-table-wrap { flex: 1 1 auto; overflow: auto; }
table.vo-trips {
    width: 100%;
    min-width: 1600px;
    border-collapse: collapse;
    table-layout: fixed;
    empty-cells: show;
}
table.vo-trips thead { display: table-header-group !important; }
table.vo-trips tbody { display: table-row-group !important; }
table.vo-trips tr { display: table-row !important; }
table.vo-trips th, table.vo-trips td {
    display: table-cell !important;
    position: static !important;
    float: none !important;
    white-space: normal;
    word-break: break-word;
    vertical-align: top;
    padding: 6px 5px;
    font-size: 11px;
    border-bottom: 1px solid #eee;
}
table.vo-trips th {
    background: #f9c213 !important;
    color: #000;
    font-weight: bold;
    white-space: nowrap;
    position: sticky !important;
    top: 0;
    z-index: 2;
}
table.vo-trips tbody tr:nth-child(odd) { background: #f7f7f7; }
.fixed_payment_class { color: #07841e; font-weight: bold; }
.pending_payment_class { color: #c62828; font-weight: bold; }
.pass_pend_payment_class { color: #ff9600; font-weight: bold; }
</style>
<div class="vo-topbar">
    <span></span>
    <a href="<?php echo URL_BASE; ?>dispatch-panel/view-only" title="logo">
        <img src="<?php echo URL_BASE; ?>public/uploads/site_logo/logo.png" alt="Logo">
    </a>
    <div class="vo-user">
        <span><?php echo isset($username) && $username ? htmlspecialchars($username) : 'View Dispatcher'; ?></span>
        <a href="<?php echo URL_BASE; ?>dispatch-panel/logout">Logout</a>
    </div>
</div>
