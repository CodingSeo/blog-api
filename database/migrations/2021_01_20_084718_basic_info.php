<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BasicInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \Illuminate\Support\Facades\DB::connection('mysql');
        config(['database.connections.mysql.database' => 'admin']);
        Schema::dropIfExists('basic_info');
        \Illuminate\Support\Facades\DB::statement("create table basic_info
(
    no                   int unsigned auto_increment
        primary key,
    domain               varchar(90)                                       default ''           not null,
    group_id             varchar(90)                                       default ''           not null,
    service_item         enum ('W', 'U', 'F', 'H', 'P', 'T', 'N_H', 'N_G') default 'W'          not null,
    service_type         varchar(10)                                                            null,
    std_mail_size        int unsigned                                      default 20           not null,
    total_mail_size      int unsigned                                      default 300000       not null,
    total_web_size       int unsigned                                      default 0            not null,
    default_filebox_size int unsigned                                      default 0            not null,
    add_filebox_size     int unsigned                                      default 0            not null,
    sms_id               varchar(20)                                       default ''           not null,
    startdate            date                                              default '0000-00-00' not null,
    updatedate           date                                              default '0000-00-00' not null,
    active               enum ('Y', 'N')                                   default 'Y'          not null,
    use_pop3             enum ('Y', 'N')                                   default 'Y'          not null,
    use_smtp             enum ('Y', 'N')                                   default 'Y'          not null,
    db_ip                varchar(20)                                       default ''           not null,
    db_partitioning      varchar(5)                                        default '001'        not null,
    mail_partitioning    varchar(3)                                                             null,
    mail_ip              varchar(20)                                       default ''           not null,
    web_ip               varchar(20)                                       default ''           not null,
    mail_use_flag        enum ('Y', 'N')                                   default 'Y'          not null,
    webhard_use_flag     enum ('Y', 'N')                                   default 'N'          not null,
    iframe_flag          enum ('Y', 'N')                                   default 'N'          not null,
    max_user_cnt         int                                               default 99999        null,
    office_user_cnt      int                                               default 99999        null,
    is_managed           enum ('Y', 'N')                                   default 'N'          not null,
    is_archive           enum ('Y', 'N')                                   default 'N'          not null,
    use_subdomain        enum ('Y', 'N')                                   default 'N'          not null,
    kid_share_flag       enum ('Y', 'N')                                   default 'Y'          not null,
    std_price            int(10)                                           default 0            not null,
    board_migration_flag enum ('Y', 'N')                                   default 'N'          not null,
    inside_mail_flag     enum ('Y', 'N')                                   default 'N'          null
)");
        \Illuminate\Support\Facades\DB::statement("
create index basic_info_no_domain
    on basic_info (no, domain)");
        \Illuminate\Support\Facades\DB::statement("
create index basicinfo_domain
    on basic_info (domain, active)");
        \Illuminate\Support\Facades\DB::statement("
create index basicinfo_groupid
    on basic_info (group_id, active)");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('basic_info');
    }
}
