<?php
/**
 * Language definitions. Generated by the Blesta Translator
 * 
 * @package blesta
 * @version 4.4.0
 * @copyright Copyright (c) 2019, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Solusvm.!actions.reboot'] = "Reboot";
$lang['Solusvm.!error.server_name.empty'] = "Silahkan mengisi label server";
$lang['Solusvm.!error.user_id.empty'] = "Silakan masukkan ID pengguna.";
$lang['Solusvm.!error.key.empty'] = "Masukkan kunci/key.";
$lang['Solusvm.!error.meta[type].valid'] = "Pilih jenis virtualisasi yang valid.";
$lang['Solusvm.!error.meta[set_template].format'] = "Silahkan atur template atau biarkan klien menentukan template sendiri.";
$lang['Solusvm.!error.api.internal'] = "Sebuah kesalahan internal terjadi, atau server tidak merespon permintaan tersebut.";
$lang['Solusvm.!error.solusvm_template.valid'] = "Pilih template yang valid.";
$lang['Solusvm.!error.create_client.failed'] = "Sebuah kesalahan internal terjadi dan rekening klien tidak dapat dibuat.";
$lang['Solusvm.!error.api.template.valid'] = "Template yang dipilih tidak valid.
";
$lang['Solusvm.please_select'] = "-- Silakan pilih --";
$lang['Solusvm.!bytes.value'] = "%1\$s%2\$s"; // %1$s is a number value, %2$s is the unit of that value (i.e., one of B, KB, MB, GB)
$lang['Solusvm.name'] = "SolusVM";
$lang['Solusvm.module_group'] = "SolusVM Master Group";
$lang['Solusvm.manage.module_groups_title'] = "SolusVM Master Server Grup";
$lang['Solusvm.manage.module_rows_heading.options'] = "Pilihan";
$lang['Solusvm.manage.module_groups_heading.servers'] = "Hitungan Server ";
$lang['Solusvm.manage.module_groups_heading.options'] = "Pilihan";
$lang['Solusvm.manage.module_rows.delete'] = "Hapus";
$lang['Solusvm.manage.module_rows.confirm_delete'] = "Apakah Anda yakin ingin menghapus server ini?";
$lang['Solusvm.manage.module_groups.confirm_delete'] = "Apakah Anda yakin ingin menghapus grup server ini?";
$lang['Solusvm.manage.module_rows_no_results'] = "Tidak ada server.";
$lang['Solusvm.manage.module_groups_no_results'] = "Tidak ada kelompok server";
$lang['Solusvm.row_meta.server_name'] = "Label Server";
$lang['Solusvm.row_meta.user_id'] = "User ID";
$lang['Solusvm.row_meta.host'] = "Hostname";
$lang['Solusvm.row_meta.port'] = "SSL Port Number";
$lang['Solusvm.types.xen'] = "Xen";
$lang['Solusvm.types.xen_hvm'] = "Xen HVM";
$lang['Solusvm.types.kvm'] = "KVM";
$lang['Solusvm.add_row.box_title'] = "Tambahkan SolusVM Server";
$lang['Solusvm.add_row.basic_title'] = "Pengaturan Dasar";
$lang['Solusvm.add_row.add_btn'] = "Tambahkan Server";
$lang['Solusvm.edit_row.basic_title'] = "Pengaturan Dasar";
$lang['Solusvm.edit_row.add_btn'] = "Update Server";
$lang['Solusvm.package_fields.client_set_template'] = "Biarkan klien mengatur Template";
$lang['Solusvm.service_field.solusvm_hostname'] = "Hostname";
$lang['Solusvm.service_info.solusvm_main_ip_address'] = "IP Address utama";
$lang['Solusvm.tab_actions'] = "Server Actions";
$lang['Solusvm.tab_stats'] = "Statistik";
$lang['Solusvm.tab_actions.status_online'] = "Online";
$lang['Solusvm.tab_actions.status_offline'] = "Offline";
$lang['Solusvm.tab_actions.server_status'] = "Server Status";
$lang['Solusvm.tab_actions.field_template'] = "Contoh";
$lang['Solusvm.tab_actions.heading_hostname'] = "Ubah Hostname";
$lang['Solusvm.tab_actions.text_hostname_reboot'] = "Perubahan untuk nama host/hostname hanya akan berlaku setelah server telah reboo";
$lang['Solusvm.tab_actions.field_hostname'] = "Hostname";
$lang['Solusvm.tab_actions.field_password'] = "Password Root yang baru";
$lang['Solusvm.tab_actions.field_confirm_password'] = "Konfirmasi Kata Sandi";
$lang['Solusvm.tab_actions.field_password_submit'] = "Ganti Password";
$lang['Solusvm.tab_client_actions.heading_actions'] = "Tindakan";
$lang['Solusvm.tab_client_actions.heading_server_status'] = "Server Status";
$lang['Solusvm.tab_client_actions.status_online'] = "On Line";
$lang['Solusvm.tab_client_actions.status_offline'] = "Offline";
$lang['Solusvm.tab_client_actions.field_template'] = "Template";
$lang['Solusvm.tab_client_actions.field_confirm'] = "Saya memahami bahwa dengan menginstal ulang, semua data pada server akan dihapus secara permanen, dan template yang dipilih akan dipasang.";
$lang['Solusvm.tab_client_actions.field_reinstall_submit'] = "Instal ulang";
$lang['Solusvm.tab_client_actions.heading_hostname'] = "Ganti Hostname";
$lang['Solusvm.tab_client_actions.text_hostname_reboot'] = "Sebuah perubahan nama host hanya akan berlaku setelah server telah reboot.";
$lang['Solusvm.tab_client_actions.field_hostname_submit'] = "Ganti Hostname";
$lang['Solusvm.tab_stats.heading_stats'] = "Statistika";
$lang['Solusvm.tab_stats.memory_stats'] = "%1\$s/%2\$s"; // %1$s is the memory used, %2$s is the total memory available
$lang['Solusvm.tab_stats.memory_percent_available'] = "(%1\$s%%)"; // %1$s is the percentage of memory used. You MUST use two % signs to represent a single percent (i.e. %%)
$lang['Solusvm.tab_stats.space_stats'] = "%1\$s/%2\$s"; // %1$s is the hard disk space used, %2$s is the total hard disk space available
$lang['Solusvm.tab_stats.space_percent_available'] = "(%1\$s%%)"; // %1$s is the percentage of hard disk space used. You MUST use two % signs to represent a single percent (i.e. %%)
$lang['Solusvm.tab_stats.heading_graphs'] = "Grafik";
$lang['Solusvm.tab_client_stats.heading_stats'] = "Statistika";
$lang['Solusvm.tab_console.console_username'] = "Username Konsol:";
$lang['Solusvm.tab_console.vnc_password'] = "VNC Password:";
$lang['Solusvm.tab_client_console.heading_console'] = "Konsol";
$lang['Solusvm.package_fields.set_node_group'] = "Menetapkan node group";
$lang['Solusvm.package_fields.node_group'] = "Node Grup";
$lang['SolusVM.!error.simplexml_required'] = "simplexml extension diperlukan untuk modul ini.";
$lang['Solusvm.!error.meta[nodes].empty'] = "Harap pilih setidaknya satu node atau grup node.";
$lang['Solusvm.service_field.solusvm_vserver_id'] = "ID Virtual Server ";
$lang['Solusvm.tab_client_stats.memory'] = "Memory";
$lang['Solusvm.tab_client_stats.space'] = "Disk Space";
$lang['Solusvm.tab_client_console.vnc_password'] = "Password VNC";
$lang['Solusvm.!error.configoptions[customextraip].valid'] = "Jumlah IP tambahan tidak dapat berkurang tanpa menentukan IP mana yang dihapus.";
$lang['Solusvm.tab_ips.heading_ips'] = "Alamat IP";
$lang['Solusvm.tab_ips.heading_extra_ips'] = "Alamat IP tambahan";
$lang['Solusvm.tab_ips.confirm_remove'] = "Apakah Anda yakin Anda ingin menghapus alamat IP ini secara permanen?";
$lang['Solusvm.tab_client_ips.remove_ip'] = "Hapus IP";
?>