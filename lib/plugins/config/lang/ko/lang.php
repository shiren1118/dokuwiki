<?php
/**
 * korean language file
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Christopher Smith <chris@jalakai.co.uk>
 * @author     jk Lee <bootmeta@gmail.com>
 */

// for admin plugins, the menu prompt to be displayed in the admin menu
// if set here, the plugin doesn't need to override the getMenuText() method
$lang['menu']       = '환경 설정';

$lang['error']      = '잘못된 값때문에 설정들을 변경할 수 없습니다. 수정한 값들을 검사하고 확인을 누르기 바랍니다.
                       <br />잘못된 값(들)은 붉은 선으로 둘러싸여 있습니다.';
$lang['updated']    = '설정이 성공적으로 변경되었습니다.';
$lang['nochoice']   = '(다른 선택이 불가능합니다.)';
$lang['locked']     = '환경 설정 파일을 수정할 수 없습니다. 의도된 행동이 아니라면,<br /> 파일이름과 권한이 맞는지 확인하기 바랍니다. ';

/* --- Config Setting Headers --- */
$lang['_configuration_manager'] = '환경 설정 관리자'; //same as heading in intro.txt
$lang['_header_dokuwiki'] = 'DokuWiki 설정';
$lang['_header_plugin'] = 'Plugin 설정';
$lang['_header_template'] = 'Template 설정';
$lang['_header_undefined'] = '정의되지 않은 설정';

/* --- Config Setting Groups --- */
$lang['_basic'] = '기본 설정';
$lang['_display'] = '화면 표시 설정';
$lang['_authentication'] = '인증 설정';
$lang['_anti_spam'] = '안티-스팸 설정';
$lang['_editing'] = '편집 설정';
$lang['_links'] = '링크 설정';
$lang['_media'] = '미디어 설정';
$lang['_advanced'] = '진보된 설정';
$lang['_network'] = '네트워크 설정';
// The settings group name for plugins and templates can be set with
// plugin_settings_name and template_settings_name respectively. If one
// of these lang properties is not set, the group name will be generated
// from the plugin or template name and the localized suffix.
$lang['_plugin_sufix'] = 'Plugin 설정';
$lang['_template_sufix'] = 'Template 설정';

/* --- Undefined Setting Messages --- */
$lang['_msg_setting_undefined'] = '설정되지 않은 메타데이타.';
$lang['_msg_setting_no_class'] = '설정되지 않은 클래스.';
$lang['_msg_setting_no_default'] = '기본값 없음.';

/* -------------------- Config Options --------------------------- */

$lang['fmode']       = '파일 생성 모드';
$lang['dmode']       = '디렉토리 생성 모드';
$lang['lang']        = '언어';
$lang['basedir']     = '기본 디렉토리';
$lang['baseurl']     = '기본 URL';
$lang['savedir']     = '데이타 저장 디렉토리';
$lang['start']       = '시작 페이지 이름';
$lang['title']       = '위키 제목';
$lang['template']    = '템플릿';
$lang['fullpath']    = '페이지 하단에 전체 경로 보여주기';
$lang['recent']      = '최근에 바뀐 것';
$lang['breadcrumbs'] = '위치 추적 수';
$lang['youarehere']  = '계층형 위치 추적';
$lang['typography']  = '기호 대체';
$lang['htmlok']      = 'HTML 내장 허용';
$lang['phpok']       = 'PHP 내장 허용';
$lang['dformat']     = '날짜 포맷 (PHP <a href="http://www.php.net/date">date</a> 기능) 참조';
$lang['signature']   = '서명';
$lang['toptoclevel'] = '목차 최상위 항목';
$lang['maxtoclevel'] = '목차 최대 단계';
$lang['maxseclevel'] = '섹션 최대 편집 단계';
$lang['camelcase']   = '링크에 CamelCase 사용';
$lang['deaccent']    = '악센트 없는 페이지 이름';
$lang['useheading']  = '페이지 이름으로 첫 헤드라인 사용';
$lang['refcheck']    = '미디어 참조 검사';
$lang['refshow']     = '보여줄 미디어 참조 수';
$lang['allowdebug']  = '디버그 허용 <b>필요하지 않으면 금지!</b>';

$lang['usewordblock']= '금지단어를 사용해 스팸 막기';
$lang['indexdelay']  = '색인 연기 시간(초)';
$lang['relnofollow'] = '외부 링크에 rel="nofollow" 사용';
$lang['mailguard']   = '이메일 주소를 알아볼 수 없게';
$lang['iexssprotect']= '업로드 파일의 악성 Javascript, HTML 코드 가능성 여부를 검사';

/* Authentication Options */
$lang['useacl']      = '접근 제어 목록(ACL) 사용';
$lang['autopasswd']  = '자동으로 만들어진 패스워드';
$lang['authtype']    = '인증 백-엔드';
$lang['passcrypt']   = '패스워드 암호화 방법';
$lang['defaultgroup']= '기본 그룹';
$lang['superuser']   = '슈퍼 유저';
$lang['manager']     = '관리자 - 관리 기능들을 사용할 수 있는 그룹이나 사용자';
$lang['profileconfirm'] = '개인정보 변경시 암호 재확인';
$lang['disableactions'] = 'DokuWiki Action 금지';
$lang['disableactions_check'] = '검사';
$lang['disableactions_subscription'] = '구독 신청/해지';
$lang['disableactions_wikicode'] = '문서 소스 보기';
$lang['disableactions_other'] = '다른 Action(comma로 구분)';

/* Advanced Options */
$lang['updatecheck'] = '업데이트와 보안 문제를 검사(DokuWiki를 splitbrain.org에 연결해야 합니다.)';
$lang['userewrite']  = 'URL rewriting기능을 사용';
$lang['useslash']    = 'URL에서 네임스페이스 구분자로 슬래쉬 문자 사용';
$lang['usedraft']    = '편집하는 동안 자동으로 문서 초안 저장';
$lang['sepchar']     = '페이지 이름 단어 구분자';
$lang['canonical']   = '완전한 canonical URL 사용';
$lang['autoplural']  = '링크 연결시 plural폼 검사';
$lang['compression'] = 'attic파일 압축 방법 선택';
$lang['cachetime']   = '최대 캐쉬 생존 시간(초)';
$lang['locktime']    = '쵀대 파일 잠금 시간(초)';
$lang['fetchsize']   = 'fetch.php가 외부에서 다운로드할 수도 있는 최대 크기(바이트)';
$lang['notify']      = '이메일 알람 기능';
$lang['registernotify'] = '신규 등록자 알람 기능';
$lang['mailfrom']    = '자동으로 보내지는 메일 발신자';
$lang['gzip_output'] = 'xhml내용 gzip압출 여부';
$lang['gdlib']       = 'GD 라이브러리 버전';
$lang['im_convert']  = 'ImageMagick 위치';
$lang['jpg_quality'] = 'JPG 압축 품질 (0-100)';
$lang['spellchecker']= '맞춤법 검사기 사용';
$lang['subscribers'] = '페이지 갱신 알람 기능';
$lang['compress']    = '최적화된 CSS, javascript 출력';
$lang['hidepages']   = '매칭된 페이지 숨기기(정규식 매칭)';
$lang['send404']     = '존재하지 않는 페이지에 대해 "HTTP 404/Page Not Found" 응답';
$lang['sitemap']     = '구글 사이트맵 생성(날짜)';
$lang['broken_iua']  = '설치된 시스템에서 ignore_user_abort 기능에 문제가 있으면 색인이 정상적으로 동작하지 않습니다. 이 기능이 IIS+PHP/CGI에서 문제가 있는 것으로 알려졌습니다. 자세한 정보는 <a href="http://bugs.splitbrain.org/?do=details&amp;id=852">Bug 852</a>를 참고하기 바랍니다.';

$lang['rss_type']    = 'XML feed 타잎';
$lang['rss_linkto']  = 'XML feed 링크 정보';
$lang['rss_update']  = 'XML feed 갱신 주기(초)';
$lang['recent_days'] = '최근 바뀐 페이지 기준 시간(날짜)';
$lang['rss_show_summary'] = 'XML feed 제목에서 요약정보 보여주기';

/* Target options */
$lang['target____wiki']      = '내부 링크들에 대한 타겟 윈도우 ';
$lang['target____interwiki'] = 'InterWiki 링크들에 대한 타겟 윈도우';
$lang['target____extern']    = '외부 링크들에 대한 타겟 윈도우';
$lang['target____media']     = '미디어 링크들에 대한 타겟 윈도우';
$lang['target____windows']   = '윈도우 링크들에 대한 타겟 윈도우';

/* Proxy Options */
$lang['proxy____host'] = '프록시 서버 이름';
$lang['proxy____port'] = '프록시 서버 포트';
$lang['proxy____user'] = '프록시 사용자 이름';
$lang['proxy____pass'] = '프록시 패스워드';
$lang['proxy____ssl']  = '프록시 연결시 ssl사용';

/* Safemode Hack */
$lang['safemodehack'] = 'safemode hack기능 사용';
$lang['ftp____host'] = 'safemode hack의 FTP 서버';
$lang['ftp____port'] = 'safemode hack의 FTP port';
$lang['ftp____user'] = 'safemode hack의 FTP 사용자 이름';
$lang['ftp____pass'] = 'safemode hack의 FTP 패스워드';
$lang['ftp____root'] = 'safemode hack의 FTP 루트 디렉토리';

/* userewrite options */
$lang['userewrite_o_0'] = '사용 안함';
$lang['userewrite_o_1'] = '.htaccess';
$lang['userewrite_o_2'] = 'DokuWiki 내부 기능';

/* deaccent options */
$lang['deaccent_o_0'] = '사용 안함';
$lang['deaccent_o_1'] = '악센트 제거';
$lang['deaccent_o_2'] = '라틴문자화';

/* gdlib options */
$lang['gdlib_o_0'] = 'GD 라이브러리 사용 안함';
$lang['gdlib_o_1'] = '버전 1.x';
$lang['gdlib_o_2'] = '자동 인식';

/* rss_type options */
$lang['rss_type_o_rss']  = 'RSS 0.91';
$lang['rss_type_o_rss1'] = 'RSS 1.0';
$lang['rss_type_o_rss2'] = 'RSS 2.0';
$lang['rss_type_o_atom'] = 'Atom 0.3';

/* rss_linkto options */
$lang['rss_linkto_o_diff']    = '차이점 보기';
$lang['rss_linkto_o_page']    = '변경 페이지 보기';
$lang['rss_linkto_o_rev']     = '변경 목록 보기';
$lang['rss_linkto_o_current'] = '최근 페이지 보기';

/* compression options */
$lang['compression_o_0']   = '없음';
$lang['compression_o_gz']  = 'gzip';
$lang['compression_o_bz2'] = 'bz2';
