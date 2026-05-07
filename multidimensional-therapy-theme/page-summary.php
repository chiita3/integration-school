<?php
/*
Template Name: 募集要項・料金
*/
get_header('course');
?>
<style>
  /* =========================================
     Page Content Styles (Summary Theme)
     ========================================= */
  .page-hero {
    position: relative;
    padding: 200px 20px 100px;
    text-align: center;
    background-color: #f4f8f9;
    overflow: hidden;
  }

  .hero-bg-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-family: 'Playfair Display', serif;
    font-size: 18vw;
    font-weight: 700;
    color: rgba(197, 160, 89, 0.05);
    pointer-events: none;
    line-height: 1;
    white-space: nowrap;
  }

  .page-header-inner {
    position: relative;
    z-index: 1;
  }

  .course-label {
    display: inline-block;
    font-family: 'Lato', sans-serif;
    font-size: 13px;
    letter-spacing: 0.2em;
    color: #c5a059;
    text-transform: uppercase;
    margin-bottom: 20px;
  }

  .page-title {
    font-size: 40px;
    font-weight: 500;
    letter-spacing: 0.1em;
    line-height: 1.4;
    margin-bottom: 15px;
  }

  .page-sub {
    font-size: 15px;
    color: #888;
  }

  .content-container {
    max-width: 960px;
    margin: 0 auto;
    padding: 0 30px;
  }

  .theme-summary .content-container {
    max-width: 1120px;
  }

  .detail-section {
    margin-top: 120px;
  }

  .section-heading {
    font-family: 'Playfair Display', serif;
    font-size: 32px;
    color: #333;
    text-align: center;
    margin-bottom: 20px;
    letter-spacing: 0.05em;
    position: relative;
    padding-bottom: 20px;
  }

  .section-heading::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 40px;
    height: 1px;
    background: #c5a059;
  }

  .section-lead {
    text-align: center;
    font-weight: 500;
    margin-bottom: 60px;
    color: #666;
  }

  .special-offer-box {
    position: relative;
    background: linear-gradient(135deg, #fffaf5 0%, #fff 100%);
    border: 1px solid #eaddc5;
    padding: 60px 40px;
    text-align: center;
    border-radius: 4px;
    margin-bottom: 80px;
    box-shadow: 0 20px 40px rgba(197, 160, 89, 0.1);
  }

  .special-offer-box::before {
    content: '';
    position: absolute;
    top: 6px;
    left: 6px;
    right: 6px;
    bottom: 6px;
    border: 1px solid rgba(197, 160, 89, 0.2);
    pointer-events: none;
  }

  .offer-badge {
    position: absolute;
    top: -15px;
    left: 50%;
    transform: translateX(-50%);
    background: #c5a059;
    color: #fff;
    font-family: 'Playfair Display', serif;
    font-weight: 600;
    padding: 8px 30px;
    font-size: 13px;
    letter-spacing: 2px;
    box-shadow: 0 5px 15px rgba(197, 160, 89, 0.2);
    white-space: nowrap;
  }

  .offer-title {
    font-family: 'Noto Serif JP', serif;
    font-size: 24px;
    color: #8e6e2e;
    margin-bottom: 20px;
    line-height: 1.6;
  }

  .offer-desc {
    font-size: 14px;
    line-height: 2;
    color: #555;
    margin-bottom: 40px;
  }

  .marker {
    background: linear-gradient(transparent 70%, #ffeb3b 70%);
    font-weight: 700;
    color: #333;
  }

  .price-comparison {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 40px;
    margin-bottom: 30px;
    flex-wrap: wrap;
  }

  .comp-col .label {
    display: block;
    font-size: 11px;
    color: #888;
    margin-bottom: 5px;
    letter-spacing: 1px;
  }

  .comp-col.regular .value {
    font-family: 'Playfair Display', serif;
    font-size: 24px;
    color: #aaa;
    text-decoration: line-through;
  }

  .comp-col.special .value {
    font-family: 'Playfair Display', serif;
    font-size: 42px;
    color: #c0392b;
    line-height: 1;
    font-weight: 500;
  }

  .comp-col .tax {
    font-size: 12px;
    color: #666;
    font-weight: normal;
    margin-left: 5px;
    font-family: 'Noto Serif JP', serif;
  }

  .comp-arrow {
    font-size: 24px;
    color: #c5a059;
    font-weight: 300;
  }

  .limit-text {
    font-size: 12px;
    color: #c0392b;
    font-weight: 700;
    letter-spacing: 0.05em;
  }

  .price-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    align-items: flex-end;
  }

  .price-card {
    background: #fff;
    border: 1px solid #eee;
    padding: 40px 30px;
    text-align: center;
    transition: all 0.4s ease;
    position: relative;
    display: flex;
    flex-direction: column;
  }

  .price-card:hover {
    border-color: #c5a059;
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.05);
    transform: translateY(-5px);
  }

  .price-card.recommended {
    border: 1px solid #c5a059;
    padding-top: 60px;
    transform: scale(1.05);
    z-index: 2;
    box-shadow: 0 20px 50px rgba(197, 160, 89, 0.1);
  }

  .price-card.recommended:hover {
    transform: scale(1.05) translateY(-5px);
  }

  .price-card--gold {
    border: 1px solid #c5a059;
    background: #fffaf0;
  }

  .price-card--gold:hover {
    border-color: #c5a059;
  }

  .rec-label {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    background: #c5a059;
    color: #fff;
    font-size: 10px;
    letter-spacing: 2px;
    padding: 6px 0;
    font-weight: 600;
    font-family: 'Lato', sans-serif;
  }

  .card-header {
    margin-bottom: 25px;
  }

  .plan-name {
    display: block;
    font-family: 'Playfair Display', serif;
    font-size: 20px;
    color: #333;
    margin-bottom: 5px;
    font-weight: 600;
  }

  .plan-sub {
    display: block;
    font-size: 11px;
    color: #888;
  }

  .card-price {
    font-family: 'Playfair Display', serif;
    font-size: 28px;
    color: #333;
    margin-bottom: 30px;
    letter-spacing: 0.05em;
  }

  .card-price.highlight {
    color: #c0392b;
    font-size: 32px;
    font-weight: 500;
  }

  .card-price .tax {
    font-size: 11px;
    color: #999;
    font-family: 'Noto Serif JP', serif;
    font-weight: normal;
  }

  .plan-features {
    text-align: left;
    margin-bottom: 30px;
    border-top: 1px solid #f9f9f9;
    padding-top: 25px;
    list-style: none;
  }

  .plan-features li {
    font-size: 13px;
    color: #555;
    margin-bottom: 12px;
    padding-left: 20px;
    position: relative;
    line-height: 1.6;
  }

  .plan-features li::before {
    content: '✔';
    position: absolute;
    left: 0;
    color: #c5a059;
    font-size: 10px;
    top: 2px;
  }

  .plan-features li.bonus {
    font-weight: 700;
    color: #c0392b;
  }

  .plan-note {
    font-size: 12px;
    color: #c0392b;
    font-weight: 600;
    margin: 0 0 20px;
    text-align: left;
  }

  .plan-features li.disabled {
    color: #ccc;
    text-decoration: line-through;
  }

  .plan-features li.disabled::before {
    content: '-';
    color: #ccc;
  }

  .btn-plan {
    display: block;
    width: 100%;
    padding: 16px 0;
    background: #333;
    color: #fff;
    font-size: 13px;
    letter-spacing: 1px;
    border: 1px solid #333;
    margin-top: auto;
    text-decoration: none;
    transition: all 0.3s;
  }

  .btn-plan:hover {
    background: #fff;
    color: #333;
  }

  .btn-rec {
    background: #c5a059;
    border-color: #c5a059;
    font-weight: 600;
  }

  .btn-rec:hover {
    color: #c5a059;
    background: #fff;
  }

  .price-card.retake {
    grid-column: 1 / -1;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    background: #fafafa;
    border: 1px dashed #ccc;
    margin-top: 40px;
    padding: 30px 50px;
  }

  .retake-info {
    text-align: left;
  }

  .retake-info .plan-name {
    font-size: 16px;
    margin-bottom: 5px;
  }

  .retake-info p {
    font-size: 12px;
    color: #666;
  }

  .retake-right {
    display: flex;
    align-items: center;
    gap: 40px;
    flex-wrap: wrap;
  }

  .retake-price {
    font-family: 'Playfair Display', serif;
    font-size: 14px;
    display: flex;
    flex-direction: column;
    gap: 12px;
    line-height: 1.5;
  }

  .retake-price-line {
    display: block;
    white-space: nowrap;
    font-size: 14px;
    color: #333;
  }

  .retake-price-line .tax {
    font-size: 12px;
    color: #666;
  }

  .retake-buttons {
    display: flex;
    flex-direction: column;
    gap: 10px;
    min-width: 200px;
  }

  .price-card.retake .btn-simple {
    font-size: 12px;
    padding: 12px 24px;
    white-space: normal;
    line-height: 1.4;
  }

  .btn-simple {
    text-decoration: none;
    font-size: 13px;
    border: 1px solid #333;
    color: #333;
    padding: 10px 30px;
    transition: all 0.3s;
    text-align: center;
    white-space: nowrap;
  }

  .btn-simple:hover {
    background: #333;
    color: #fff;
  }

  .condition-note {
    font-size: 10px;
    color: #c0392b;
    margin-bottom: 15px;
  }

  .retake-notes {
    grid-column: 1 / -1;
    margin-top: 20px;
    padding: 25px 30px;
    background: #fafafa;
    border: 1px solid #eee;
    font-size: 13px;
    color: #555;
    line-height: 1.9;
  }

  .retake-notes p {
    margin: 0 0 12px;
  }

  .retake-notes p:last-child {
    margin-bottom: 0;
  }

  .schedule-filters {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin-bottom: 50px;
    flex-wrap: wrap;
  }

  .filter-btn {
    background: transparent;
    border: 1px solid #eee;
    padding: 8px 24px;
    border-radius: 30px;
    font-family: 'Playfair Display', serif;
    font-size: 13px;
    cursor: pointer;
    transition: all 0.3s ease;
    color: #888;
  }

  .filter-btn.active {
    background: #333;
    border-color: #333;
    color: #fff;
  }

  .month-block {
    display: flex;
    align-items: flex-start;
    margin-bottom: 50px;
    border-top: 1px solid #eee;
    padding-top: 40px;
  }

  .month-block.hidden {
    display: none;
  }

  .month-label {
    width: 150px;
    flex-shrink: 0;
    font-family: 'Playfair Display', serif;
    font-size: 32px;
    color: #c5a059;
    text-align: right;
    padding-right: 40px;
    border-right: 1px solid #eee;
    line-height: 1;
    margin-top: 5px;
  }

  .schedule-list {
    flex-grow: 1;
    padding-left: 40px;
    list-style: none;
  }

  .schedule-list li {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
    font-size: 14px;
    border-bottom: 1px solid #fafafa;
    padding-bottom: 15px;
    transition: all 0.4s ease;
  }

  .schedule-list li.hide {
    display: none;
  }

  .schedule-list .date {
    font-family: 'Playfair Display', serif;
    font-weight: 500;
    width: 120px;
    font-size: 16px;
    color: #333;
    flex-shrink: 0;
  }

  .schedule-list .wday {
    font-size: 12px;
    font-family: 'Noto Serif JP', serif;
    color: #888;
    margin-left: 3px;
  }

  .item-content {
    white-space: nowrap;
  }

  .tag {
    display: inline-block;
    font-size: 10px;
    padding: 3px 10px;
    margin-right: 15px;
    min-width: 70px;
    text-align: center;
    letter-spacing: 1px;
    font-family: 'Lato', sans-serif;
    font-weight: 700;
    border-radius: 2px;
  }

  .tag.basic {
    background: #eef9f6;
    color: #6c9a93;
    border: 1px solid #6c9a93;
  }

  .tag.adv {
    background: #fff5eb;
    color: #c5a059;
    border: 1px solid #c5a059;
  }

  .tag.ws {
    background: #f0f7ff;
    color: #e67e22;
    border: 1px solid #e67e22;
  }

  .req {
    font-size: 10px;
    color: #c0392b;
    font-weight: 700;
    margin-left: 10px;
  }

  .hybrid-label {
    color: #c0392b;
    font-size: 0.75em;
    margin-left: 2px;
  }

  .schedule-note {
    font-size: 12px;
    color: #888;
    margin-top: 16px;
    margin-left: 120px;
    padding-top: 12px;
    border-top: 1px dashed #eee;
  }

  .schedule-note.accent {
    color: #c0392b;
    font-weight: 600;
  }

  .terms-box {
    background: #fafafa;
    padding: 50px;
    border: 1px solid #eee;
  }

  .term-title {
    font-size: 16px;
    margin-bottom: 15px;
    padding-left: 15px;
    border-left: 3px solid #c5a059;
    color: #2c3e50;
    letter-spacing: 0.05em;
    font-weight: 700;
  }

  .term-list {
    padding-left: 15px;
    margin-bottom: 40px;
  }

  .term-list li {
    list-style-type: disc;
    margin-left: 20px;
    margin-bottom: 8px;
    font-size: 14px;
    color: #666;
    line-height: 1.8;
  }

  .cta-area {
    text-align: center;
    border-top: 1px solid #eee;
    padding-top: 80px;
    margin-top: 100px;
    padding-bottom: 100px;
  }

  .cta-heading {
    font-family: 'Playfair Display', serif;
    font-size: 36px;
    margin-bottom: 10px;
    color: #333;
  }

  .payment-buttons {
    max-width: 600px;
    margin: 30px auto;
    display: flex;
    flex-direction: column;
    gap: 20px;
  }

  .pay-btn {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 25px 40px;
    border: 1px solid #ccc;
    background: #fff;
    transition: all 0.3s;
    text-decoration: none;
  }

  .pay-btn:hover {
    border-color: #333;
    background: #fafafa;
    transform: translateX(5px);
  }

  .pay-btn.gold {
    background: #fffaf0;
    border-color: #c5a059;
  }

  .pay-btn.gold .btn-main {
    color: #8e6e2e;
    font-weight: 700;
  }

  .btn-sub {
    display: block;
    font-size: 11px;
    color: #888;
    margin-bottom: 5px;
    text-align: left;
  }

  .btn-main {
    display: block;
    font-size: 16px;
    font-weight: 500;
    color: #333;
    text-align: left;
  }

  .pay-btn-price {
    font-family: 'Playfair Display', serif;
    font-size: 20px;
    color: #333;
  }

  .pay-btn-note {
    display: block;
    font-size: 12px;
    color: #c0392b;
    font-weight: 600;
    margin-top: 6px;
    text-align: left;
  }

  .js-anim-item {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.8s, transform 0.8s;
  }

  .js-anim-section.is-visible .js-anim-item {
    opacity: 1;
    transform: translateY(0);
  }

  @media (max-width: 768px) {
    .pc-only {
      display: none;
    }

    .sp-only {
      display: block;
    }

    .page-hero {
      padding: 140px 20px 60px;
    }

    .hero-bg-text {
      font-size: 15vw;
    }

    .page-title {
      font-size: 28px;
    }

    .special-offer-box {
      padding: 40px 20px;
    }

    .offer-title {
      font-size: 20px;
    }

    .price-comparison {
      gap: 15px;
    }

    .comp-col.regular .value {
      font-size: 18px;
    }

    .comp-col.special .value {
      font-size: 32px;
    }

    .comp-arrow {
      transform: rotate(90deg);
      margin: 5px 0;
    }

    .price-grid {
      grid-template-columns: 1fr;
      gap: 40px;
    }

    .price-card.recommended {
      order: -1;
      transform: none;
      padding-top: 50px;
    }

    .price-card.retake {
      flex-direction: column;
      padding: 30px 20px;
      gap: 20px;
      align-items: stretch;
    }

    .retake-right {
      flex-direction: column;
      gap: 20px;
      align-items: stretch;
    }

    .retake-price {
      font-size: 13px;
      text-align: left;
    }

    .price-card.retake .btn-simple {
      white-space: normal;
      text-align: center;
    }

    .schedule-filters {
      gap: 8px;
    }

    .filter-btn {
      padding: 6px 16px;
      font-size: 12px;
    }

    .month-block {
      flex-direction: column;
      border-top: none;
      padding-top: 0;
    }

    .month-label {
      width: 100%;
      text-align: left;
      border-right: none;
      border-bottom: 1px solid #eee;
      padding: 0 0 10px;
      margin-bottom: 20px;
      font-size: 24px;
    }

    .schedule-list {
      padding-left: 0;
    }

    .schedule-list li {
      flex-direction: column;
      align-items: flex-start;
      gap: 8px;
    }

    .schedule-list .date {
      width: 100%;
      margin-bottom: 0;
      font-size: 18px;
    }

    .item-content {
      white-space: normal;
    }

    .schedule-note {
      margin-left: 0;
    }

    .terms-box {
      padding: 30px 20px;
    }

    .pay-btn {
      padding: 20px;
      flex-direction: column;
      text-align: center;
      gap: 15px;
    }

    .pay-btn:hover {
      transform: none;
    }

    .btn-sub,
    .btn-main {
      text-align: center;
    }

    .pay-btn-price {
      width: 100%;
      justify-content: center;
      border-top: 1px solid #eee;
      padding-top: 10px;
    }
  }
</style>

<main class="course-detail-page theme-summary">

  <section class="page-hero">
    <div class="hero-bg-text">SUMMARY</div>
    <div class="page-header-inner js-anim-section">
      <span class="course-label js-anim-item">Guidelines & Fees</span>
      <h1 class="page-title js-anim-item">料金・スケジュール</h1>
      <p class="page-sub js-anim-item">2026年度 講座一覧</p>
    </div>
  </section>

  <div class="content-container">

    <section class="detail-section js-anim-section">
      <h2 class="section-heading js-anim-item">Plans & Fees</h2>
      <p class="section-lead js-anim-item">ご希望に合わせて選べるプラン</p>

      <div class="special-offer-box js-anim-item">
        <div class="offer-badge">EARLY SPECIAL</div>
        <h3 class="offer-title">
          多次元統合療法 フルセット 早割（全12日間）
        </h3>
        <p class="offer-desc">
          プロを目指す方、深い癒しを求める方に最適なフルパッケージ。<br class="pc-only">
          早期割引期間中なら、<span class="marker">「対面1Dayワークショップ2回分(¥66,000相当)」が無料ご招待</span>になります。
        </p>

        <div class="price-comparison">
          <div class="comp-col regular">
            <span class="label">多次元統合療法 フルセット (全12日間)</span>
            <span class="value">¥363,000</span>
          </div>
          <div class="comp-arrow">→</div>
          <div class="comp-col special">
            <span class="label">多次元統合療法 フルセット 早割（全12日間）</span>
            <span class="value">¥330,000</span>
            <span class="tax">(税込)</span>
          </div>
        </div>
        <p class="limit-text">【早割セット価格】※5/20(水)申込分まで 対面1Dayワークショップ2回分(¥66,000相当)無料ご招待の対象<br>
          <br>
          ▼対象ワークショップ<br>
          ・9/22(火) 11:00〜18:00　テーマ：『エネルギー・アタッチメント ― 他者のエネルギーを手放す―』<br>
          ・9/23(水) 11:00〜18:00　テーマ：『本当の私を生きる ― 真の自分を表現する勇気』
        </p>
        <a href="https://www.ohnoyuriko.com/event-details/tajigentogoryoho-furusetto-zen12nichikan-1" target="_blank" rel="noopener" class="btn-plan btn-rec" style="max-width: 400px; margin: 30px auto 0; display: block; text-align: center;">このプランを選ぶ</a>
      </div>

      <div class="price-grid js-anim-item">

        <div class="price-card">
          <div class="card-header">
            <span class="plan-name">多次元統合療法 ベーシックコース(全5日間)</span>
            <span class="plan-sub">ベーシック単体</span>
          </div>
          <div class="card-price">
            ¥165,000<span class="tax">(税込)</span>
          </div>
          <ul class="plan-features">
            <li>全5日間 (Zoom/対面)</li>
            <li>アーカイブ視聴</li>
          </ul>
          <a href="https://www.ohnoyuriko.com/event-details/torishia-shadouwakushoppu-11-29-do-17jishimekiri-2-1" target="_blank" rel="noopener" class="btn-plan">このプランを選ぶ</a>
        </div>

        <div class="price-card price-card--gold">
          <div class="card-header">
            <span class="plan-name">多次元統合療法 ベーシック＋アドバンス 早割 (全10日間)</span>
          </div>
          <div class="card-price highlight">
            ¥297,000<span class="tax">(税込)</span>
          </div>
          <ul class="plan-features">
            <li>全10日間 (Zoom/対面)</li>
            <li>アーカイブ視聴、修了証発行</li>
          </ul>
          <p class="plan-note">※早割の適用は5/20（水）23:59まで</p>
          <a href="https://www.ohnoyuriko.com/event-details/tajigentogoryoho-beshikkukosutasuadobansukosu-zen10nichikan-1" target="_blank" rel="noopener" class="btn-plan btn-rec">このプランを選ぶ</a>
        </div>

        <div class="price-card retake">
          <div class="retake-info">
            <span class="plan-name">Re-take Plan</span>
            <p>過去に受講済みの方限定の特別価格</p>
          </div>
          <div class="retake-right">
            <div class="retake-price">
              <span class="retake-price-line">再受講フルセットプラン: ¥200,000<span class="tax">(税込¥220,000)</span></span>
              <span class="retake-price-line">再々受講フルセットプラン: ¥150,000<span class="tax">(税込¥165,000)</span></span>
            </div>
            <div class="retake-buttons">
              <a href="https://www.ohnoyuriko.com/event-details/furusetto-hayawari-zen12nichikan-1" target="_blank" rel="noopener" class="btn-simple">再受講フルセットプランで申し込む</a>
              <a href="https://www.ohnoyuriko.com/event-details/tajigentogoryoho-saijukofurusetto-zen12nichikan-1-1" target="_blank" rel="noopener" class="btn-simple">再々受講フルセットプランで申し込む</a>
            </div>
          </div>
        </div>

        <div class="retake-notes">
          <p>（※）再受講フルセットプランは、2023年・2024年・2025年の間に、アイユニティ主催の多次元療法セラピスト養成講座を１回のみ受けられた方に限定いたします。</p>
          <p>（※）再々受講フルセットプランは、2023年・2024年・2025年の間に、アイユニティ主催の多次元療法セラピスト養成講座を２回以上受けられた方に限定いたします。</p>
          <p>（※）他社様で講座を受けられたことのある方は、講座名と受講された年月日を明記の上、別途事務局（問い合わせフォーム）までご相談ください。</p>
        </div>

      </div>
    </section>

    <section class="detail-section js-anim-section">
      <h2 class="section-heading js-anim-item">Total Schedule</h2>
      <p class="section-lead js-anim-item">2026年 6月〜9月 開催日程</p>

      <div class="schedule-filters js-anim-item">
        <button class="filter-btn active" data-filter="all">ALL</button>
        <button class="filter-btn" data-filter="basic">Basic</button>
        <button class="filter-btn" data-filter="adv">Advance</button>
        <button class="filter-btn" data-filter="ws">Workshop</button>
      </div>

      <div class="schedule-list-container js-anim-item">

        <div class="month-block">
          <h3 class="month-label">June</h3>
          <ul class="schedule-list">
            <li class="filter-item basic">
              <span class="date">6/6 <span class="wday">(土)</span></span>
              <div class="item-content">
                <span class="tag basic">Basic</span> Day1 (Zoom)
              </div>
            </li>
            <li class="filter-item basic">
              <span class="date">6/7 <span class="wday">(日)</span></span>
              <div class="item-content">
                <span class="tag basic">Basic</span> Day2 (Zoom)
              </div>
            </li>
          </ul>
        </div>

        <div class="month-block">
          <h3 class="month-label">July</h3>
          <ul class="schedule-list">
            <li class="filter-item basic">
              <span class="date">7/4 <span class="wday">(土)</span></span>
              <div class="item-content">
                <span class="tag basic">Basic</span> Day3 （対面/Zoom）<span class="hybrid-label">ハイブリッド開催</span> <span class="req">※参加必須</span>
              </div>
            </li>
            <li class="filter-item basic">
              <span class="date">7/5 <span class="wday">(日)</span></span>
              <div class="item-content">
                <span class="tag basic">Basic</span> Day4 （対面/Zoom）<span class="hybrid-label">ハイブリッド開催</span> <span class="req">※参加必須</span>
              </div>
            </li>
            <li class="filter-item basic">
              <span class="date">7/25 <span class="wday">(土)</span></span>
              <div class="item-content">
                <span class="tag basic">Basic</span> Day5 (Zoom)
              </div>
            </li>
          </ul>
        </div>

        <div class="month-block">
          <h3 class="month-label">September</h3>
          <ul class="schedule-list">
            <li class="filter-item ws">
              <span class="date">9/9 <span class="wday">(水)</span></span>
              <div class="item-content">
                <span class="tag ws">Online</span> ショートWS（Zoom）
              </div>
            </li>
            <li class="filter-item adv">
              <span class="date">9/12 <span class="wday">(土)</span></span>
              <div class="item-content">
                <span class="tag adv">Adv</span> Day1 （対面/Zoom）<span class="hybrid-label">ハイブリッド開催</span>
              </div>
            </li>
            <li class="filter-item adv">
              <span class="date">9/13 <span class="wday">(日)</span></span>
              <div class="item-content">
                <span class="tag adv">Adv</span> Day2 （対面/Zoom）<span class="hybrid-label">ハイブリッド開催</span>
              </div>
            </li>
            <li class="filter-item ws">
              <span class="date">9/16 <span class="wday">(水)</span></span>
              <div class="item-content">
                <span class="tag ws">Online</span> ショートWS（Zoom）
              </div>
            </li>
            <li class="filter-item adv">
              <span class="date">9/19 <span class="wday">(土)</span></span>
              <div class="item-content">
                <span class="tag adv">Adv</span> Day3 （対面/Zoom）<span class="hybrid-label">ハイブリッド開催</span> <span class="req">※参加必須</span>
              </div>
            </li>
            <li class="filter-item adv">
              <span class="date">9/20 <span class="wday">(日)</span></span>
              <div class="item-content">
                <span class="tag adv">Adv</span> Day4 （対面/Zoom）<span class="hybrid-label">ハイブリッド開催</span> <span class="req">※参加必須</span>
              </div>
            </li>
            <li class="filter-item adv">
              <span class="date">9/21 <span class="wday">(祝)</span></span>
              <div class="item-content">
                <span class="tag adv">Adv</span> Day5 （対面/Zoom）<span class="hybrid-label">ハイブリッド開催</span> <span class="req">※参加必須</span>
              </div>
            </li>
            <li class="filter-item ws">
              <span class="date">9/22 <span class="wday">(祝)</span></span>
              <div class="item-content">
                <span class="tag ws">1Day</span> 対面WS（対面/Zoom）<span class="hybrid-label">ハイブリッド開催</span>
              </div>
            </li>
            <li class="filter-item ws">
              <span class="date">9/23 <span class="wday">(祝)</span></span>
              <div class="item-content">
                <span class="tag ws">1Day</span> 対面WS（対面/Zoom）<span class="hybrid-label">ハイブリッド開催</span>
              </div>
            </li>
          </ul>
        </div>

        <p class="schedule-note accent">※9/22・9/23の1Day対面WSはそれぞれ別開催です。</p>
      </div>
    </section>

    <section class="detail-section js-anim-section">
      <h2 class="section-heading js-anim-item">Terms & Rules</h2>

      <div class="terms-box js-anim-item">
        <div class="term-group">
          <h3 class="term-title">修了認定について</h3>
          <ul class="term-list">
            <li><strong>ベーシック:</strong> 【7/4・7/5】の対面講義への参加必須。</li>
            <li><strong>アドバンス:</strong> 【全5日間のうち3日間】は対面講義への参加必須。</li>
            <li>欠席は全10日間を通じて2日まで。3日以上欠席されると修了書は発行されません。</li>
            <li>アーカイブ視聴のみは欠席扱いとなりますのでご注意ください。</li>
          </ul>
        </div>

        <div class="term-group">
          <h3 class="term-title">Zoom受講ルール</h3>
          <ul class="term-list">
            <li>原則カメラオン (顔出し)で参加。</li>
            <li>移動中、運転中の受講は安全確保のため固くお断り。</li>
          </ul>
        </div>

        <div class="term-group">
          <h3 class="term-title">キャンセルポリシー</h3>
          <ul class="term-list">
            <li>開催14日前まで: 手数料を差し引いて全額返金。</li>
            <li>開催13日〜7日前まで: 受講料の50%。</li>
            <li>開催6日前〜当日: 受講料の100% (返金不可)。</li>
          </ul>
        </div>
      </div>
    </section>

    <section id="payment" class="cta-area js-anim-section">
      <h2 class="cta-heading js-anim-item">Application</h2>
      <p class="cta-lead js-anim-item">Wix決済ページへ移動します</p>

      <div class="payment-buttons js-anim-item">

        <a href="https://www.ohnoyuriko.com/event-details/torishia-shadouwakushoppu-11-29-do-17jishimekiri-2-1" target="_blank" rel="noopener" class="pay-btn">
          <div class="pay-btn-info">
            <span class="btn-main">多次元統合療法 ベーシックコース(全5日間)<br>に申し込む</span>
          </div>
          <div class="pay-btn-price">
            ¥165,000 <span class="tax">(税込)</span> <span class="arrow-icon">→</span>
          </div>
        </a>

        <a href="https://www.ohnoyuriko.com/event-details/tajigentogoryoho-beshikkukosutasuadobansukosu-zen10nichikan-1" target="_blank" rel="noopener" class="pay-btn gold">
          <div class="pay-btn-info">
            <span class="btn-main">多次元統合療法 ベーシック＋アドバンス 早割 (全10日間)<br>に申し込む</span>
            <span class="pay-btn-note">※早割の適用は5/20（水）23:59まで</span>
          </div>
          <div class="pay-btn-price">
            ¥297,000 <span class="tax">(税込)</span> <span class="arrow-icon">→</span>
          </div>
        </a>

        <a href="https://www.ohnoyuriko.com/event-details/tajigentogoryoho-furusetto-zen12nichikan-1" target="_blank" rel="noopener" class="pay-btn gold">
          <div class="pay-btn-info">
            <span class="btn-main">多次元統合療法 フルセット 早割 (全12日間)<br>に申し込む</span>
            <span class="pay-btn-note">※早割の適用は5/20（水）23:59まで</span>
          </div>
          <div class="pay-btn-price">
            ¥330,000 <span class="tax">(税込)</span> <span class="arrow-icon">→</span>
          </div>
        </a>

        <a href="https://www.ohnoyuriko.com/event-details/furusetto-hayawari-zen12nichikan-1" target="_blank" rel="noopener" class="pay-btn">
          <div class="pay-btn-info">
            <span class="btn-main">多次元統合療法 再受講フルセット (全12日間)<br>に申し込む</span>
          </div>
          <div class="pay-btn-price">
            ¥220,000 <span class="tax">(税込)</span> <span class="arrow-icon">→</span>
          </div>
        </a>

        <a href="https://www.ohnoyuriko.com/event-details/tajigentogoryoho-saijukofurusetto-zen12nichikan-1-1" target="_blank" rel="noopener" class="pay-btn">
          <div class="pay-btn-info">
            <span class="btn-main">多次元統合療法 再々受講フルセット (全12日間)<br>に申し込む</span>
          </div>
          <div class="pay-btn-price">
            ¥165,000 <span class="tax">(税込)</span> <span class="arrow-icon">→</span>
          </div>
        </a>
      </div>

      <p class="payment-methods">お支払い方法：クレジットカード / 銀行振込<br><span class="payment-note">(※決済はWixページへ遷移)</span></p>
    </section>

  </div>
</main>

<?php get_footer(); ?>