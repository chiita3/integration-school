<?php
/*
Template Name: ワークショップ・イベント
*/
get_header('course');
?>

  <main class="course-detail-page theme-workshop">
    <section class="page-hero">
      <div class="hero-bg-text">EVENT</div>
      <div class="page-header-inner js-anim-section">
        <span class="course-label js-anim-item">Workshops & Special Events</span>
        <h1 class="page-title js-anim-item">ワークショップ<span class="pc-only">・</span><br class="sp-only">イベント情報</h1>
        <p class="page-sub js-anim-item">気軽に参加できる単発講座・無料体験会</p>
      </div>
    </section>

    <div class="content-container">
      <section id="free-events" class="detail-section js-anim-section">
        <h2 class="section-heading js-anim-item">Free Events</h2>
        <p class="section-lead js-anim-item">無料体験会・YouTubeライブ</p>
        <div class="text-block js-anim-item">
          <p>
            多次元統合療法の世界に触れる最初のステップ。<br class="pc-only">
            講師の雰囲気や講座の概要を知りたい方、<br class="sp-only">まずはここからご参加ください。
          </p>
        </div>

        <div class="schedule-table-wrapper js-anim-item">
          <table class="schedule-table table-free-events">
            <thead>
              <tr>
                <th class="col-type">種別</th>
                <th class="col-date">日付</th>
                <th class="col-time">時間</th>
                <th class="col-lecturer">講師</th>
                <th class="col-content">内容</th>
                <th class="col-cta">申込</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="count" data-label="種別"><span class="tag free">FREE</span></td>
                <td class="date" data-label="日付">4/4 <span class="wday">(土)</span></td>
                <td class="time" data-label="時間">10:00 - 12:00</td>
                <td class="lecturer lecturer-two" data-label="講師">トリシア<br>大野百合子</td>
                <td class="content-inline" data-label="内容">
                  <strong>多次元統合療法 Zoom無料体験会</strong><br><span class="note-inline">(ミニワーク・講座説明会)</span>
                </td>
                <td class="cta-cell" data-label="申込">
                  <a href="https://www.ohnoyuriko.com/event-details/torishia-shadouwakushoppu-11-29-do-17jishimekiri-2" target="_blank" rel="noopener" class="btn-free-event">申し込む</a>
                </td>
              </tr>
              <tr>
                <td class="count" data-label="種別"><span class="tag live">LIVE</span></td>
                <td class="date" data-label="日付">5/6 <span class="wday">(水)</span></td>
                <td class="time" data-label="時間">20:00 - 21:30</td>
                <td class="lecturer" data-label="講師">大野百合子</td>
                <td class="content-inline" data-label="内容">
                  <strong>大野百合子YouTubeライブ</strong><br><span class="note-inline">多次元統合療法を体験する！</span>
                </td>
                <td class="cta-cell" data-label="申込">
                  <a href="https://m.youtube.com/channel/UCiFX6drdropEMd6ipW5f64Q" target="_blank" rel="noopener" class="btn-free-event">YouTubeを見る</a>
                </td>
              </tr>
              <tr>
                <td class="count" data-label="種別"><span class="tag live">LIVE</span></td>
                <td class="date" data-label="日付">8/28 <span class="wday">(金)</span></td>
                <td class="time" data-label="時間">20:00 - 21:30</td>
                <td class="lecturer lecturer-two" data-label="講師">トリシア<br>大野百合子</td>
                <td class="content-inline" data-label="内容">
                  <strong>スペシャル企画</strong><br><span class="note-inline">トリシア・カエタノと大野百合子のYouTubeライブ</span>
                </td>
                <td class="cta-cell" data-label="申込">
                  <a href="https://m.youtube.com/channel/UCiFX6drdropEMd6ipW5f64Q" target="_blank" rel="noopener" class="btn-free-event">YouTubeを見る</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="youtube-banner js-anim-item">
          <a href="https://m.youtube.com/channel/UCiFX6drdropEMd6ipW5f64Q" target="_blank" rel="noopener" class="youtube-banner-link">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/event/youtube-bibibi-banner.png" alt="大野百合子のビビビ！〜心をほどいて運気UP！〜" class="youtube-banner-img">
          </a>
        </div>

        <div class="cta-area-small js-anim-item">
          <a href="https://m.youtube.com/channel/UCiFX6drdropEMd6ipW5f64Q" target="_blank" rel="noopener" class="btn-sub-cta">YouTubeチャンネルを見る</a>
        </div>
      </section>

      <section id="workshops" class="detail-section js-anim-section">
        <h2 class="section-heading js-anim-item">Workshops</h2>
        <p class="section-lead js-anim-item">単発ワークショップ (オンライン / 対面)</p>
        <div class="text-block js-anim-item">
          <p>
            特定のテーマを深く掘り下げるショートプログラム。<br class="pc-only">
            コース受講の前のお試しや、特定のスキルを磨きたい方におすすめです。
          </p>
        </div>

        <div class="schedule-table-wrapper js-anim-item">
          <table class="schedule-table table-workshops">
            <thead>
              <tr>
                <th class="col-type">種別</th>
                <th class="col-date">日付</th>
                <th class="col-time">時間・場所</th>
                <th class="col-lecturer">講師</th>
                <th class="col-content">内容</th>
                <th class="col-cta">申込</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="count" data-label="種別"><span class="tag online">ONLINE</span></td>
                <td class="date" data-label="日付">9/9 <span class="wday">(水)</span></td>
                <td class="time" data-label="時間・場所">19:00 - 21:00<br><span class="place-sub">Zoom</span></td>
                <td class="lecturer" data-label="講師">トリシア・カエタノ</td>
                <td data-label="内容">
                  <strong>Online ショートWS（Zoom）</strong><br>
                  <span class="note-text">テーマ: 「魂が選んだ人生 －生きがいを思い出し歓びで生きる－」</span>
                </td>
                <td class="cta-cell" data-label="申込">
                  <a href="https://www.ohnoyuriko.com/event-details/torishia-shadouwakushoppu-11-29-do-17jishimekiri-2-2" target="_blank" rel="noopener" class="btn-free-event">申し込む</a>
                </td>
              </tr>
              <tr>
                <td class="count" data-label="種別"><span class="tag online">ONLINE</span></td>
                <td class="date" data-label="日付">9/16 <span class="wday">(水)</span></td>
                <td class="time" data-label="時間・場所">19:00 - 21:00<br><span class="place-sub">Zoom</span></td>
                <td class="lecturer" data-label="講師">トリシア・カエタノ</td>
                <td data-label="内容">
                  <strong>Online ショートWS（Zoom）</strong><br>
                  <span class="note-text">テーマ: 「目覚めの扉をひらく －制限を超えて目覚める－」</span>
                </td>
                <td class="cta-cell" data-label="申込">
                  <a href="https://www.ohnoyuriko.com/event-details/torishiaonrain2jikanws-dai1kai-1" target="_blank" rel="noopener" class="btn-free-event">申し込む</a>
                </td>
              </tr>
              <tr class="highlight-row">
                <td class="count" data-label="種別"><span class="tag real ws">1DAY</span></td>
                <td class="date" data-label="日付">9/22 <span class="wday">(祝)</span></td>
                <td class="time" data-label="時間・場所">11:00 - 18:00<br><span class="place-sub">東京文具共和会館</span></td>
                <td class="lecturer" data-label="講師">トリシア・カエタノ</td>
                <td data-label="内容">
                  <strong>1Day 対面WS（対面）</strong><br>
                  <span class="note-text">テーマ: 「エネルギー・アタッチメント －他者のエネルギーを手放す－」</span>
                </td>
                <td class="cta-cell" data-label="申込">
                  <a href="https://www.ohnoyuriko.com/event-details/torishiaonrain2jikanws-dai2kai-1" target="_blank" rel="noopener" class="btn-free-event">申し込む</a>
                </td>
              </tr>
              <tr class="highlight-row">
                <td class="count" data-label="種別"><span class="tag real ws">1DAY</span></td>
                <td class="date" data-label="日付">9/23 <span class="wday">(祝)</span></td>
                <td class="time" data-label="時間・場所">11:00 - 18:00<br><span class="place-sub">東京文具共和会館</span></td>
                <td class="lecturer" data-label="講師">トリシア・カエタノ</td>
                <td data-label="内容">
                  <strong>1Day 対面WS（対面）</strong><br>
                  <span class="note-text">テーマ: 「本当の私を生きる －真の自分を表現する勇気」</span>
                </td>
                <td class="cta-cell" data-label="申込">
                  <a href="https://www.ohnoyuriko.com/event-details/taimen1daywakushoppu-dai1kaitema-enerugi-atatchimento-tashanoenerugiwotebanasu-1" target="_blank" rel="noopener" class="btn-free-event">申し込む</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <p class="note-text js-anim-item">※オンラインWS/対面WSともに<br>　受講後1ヶ月のアーカイブ配信あり。席数限定のためお早めに。</p>
        <p class="note-text note-accent js-anim-item">※9/22・9/23の1Day対面WSはそれぞれ別開催です。</p>
      </section>

      <section class="detail-section js-anim-section">
        <h2 class="section-heading js-anim-item">Venue for 1Day WS</h2>
        <div class="venue-box js-anim-item">
          <h3 class="venue-name">東京文具共和会館</h3>
          <p class="venue-address">東京都台東区柳橋1-2-10</p>
          <div class="venue-access">
            <p>JR総武線「浅草橋駅」東口より徒歩3分<br>都営浅草線「浅草橋駅」A1出口より徒歩3分</p>
          </div>
          <a href="https://www.google.com/maps/search/?api=1&query=東京文具共和会館%205階%20東京都台東区柳橋1-2-10" target="_blank" rel="noopener" class="map-link">Google Mapを見る →</a>
        </div>
      </section>

      <section id="cta-area" class="cta-area js-anim-section">
        <div class="ws-info-table-wrapper js-anim-item">
          <h2 class="section-heading js-anim-item">ワークショップ受講料</h2>
          <table class="ws-info-table">
            <thead>
              <tr>
                <th class="col-item">項目</th>
                <th class="col-detail">詳細</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="col-item">受講料(税込)</td>
                <td class="col-detail">
                  <p>・オンラインWS (各回) : <span class="price-accent">¥8,800</span></p>
                  <p>・対面1Day WS (1日) : <span class="price-accent">¥33,000</span></p>
                </td>
              </tr>
              <tr>
                <td class="col-item">会場(対面WS)</td>
                <td class="col-detail">
                  <p>東京文具共和会館(東京都台東区柳橋1-2-10)</p>
                  <p>浅草橋駅より徒歩3分</p>
                </td>
              </tr>
              <tr>
                <td class="col-item">注意事項</td>
                <td class="col-detail">
                  <p>・オンラインWS/対面WSともに<br>　受講後1ヶ月のアーカイブ配信あり</p>
                  <p>・席数限定のためお早めに。</p>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="cta-buttons js-anim-item">
          <div class="cta-recommend cta-workshop-buttons">
            <span class="recommend-badge">RECOMMEND</span>
            <p class="recommend-text">対面WSは席数限定のためお早めに！</p>
            <div class="ws-cta-grid">
              <a href="#workshops" class="btn-main-cta btn-ws-cta">
                ワークショップに申し込む
              </a>
              <a href="#free-events" class="btn-main-cta btn-ws-cta">
                イベントに申し込む
              </a>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>

<?php get_footer(); ?>
