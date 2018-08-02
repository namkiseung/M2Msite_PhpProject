
<style type="text/css">
 #css_tabs {
    font-family:'nanumgothic', '나눔고딕', 'malgun gothic', '맑은 고딕', 'dotum', '돋움', sans-serif
}

/* 탭 선택 시 표시할 요소(div) 정의(1번 탭 선택 시 첫 번째 div 요소 표시) */
#css_tabs input:nth-of-type(1), #css_tabs input:nth-of-type(1) ~ div:nth-of-type(1),
#css_tabs input:nth-of-type(2), #css_tabs input:nth-of-type(2) ~ div:nth-of-type(2),
#css_tabs input:nth-of-type(3), #css_tabs input:nth-of-type(3) ~ div:nth-of-type(3), 
#css_tabs input:nth-of-type(4), #css_tabs input:nth-of-type(4) ~ div:nth-of-type(4){
    display:none
}
#css_tabs input:nth-of-type(1):checked ~ div:nth-of-type(1),
#css_tabs input:nth-of-type(2):checked ~ div:nth-of-type(2),
#css_tabs input:nth-of-type(3):checked ~ div:nth-of-type(3), 
#css_tabs input:nth-of-type(4):checked ~ div:nth-of-type(4){
    display:block
}

/* 라벨 기본 스타일 지정 */
#css_tabs > label {
    display:inline-block;
    font-variant:small-caps;
    font-size:.9em;
    padding:5px;
    text-align:center;
    width:20%;
    line-height:1.8em;
    font-weight:700;
    border-radius:3px 3px 0 0;
    background:#eee;
    color:#777;
    border:1px solid #ccc;
    border-width:1px 1px 0
}
#css_tabs > label:hover {
    cursor:pointer
}
#css_tabs label[for=tab1] {
    margin-left:1.5em
}

/* 선택된 라벨, 커서를 올린 라벨 스타일 지정 */
#css_tabs input:nth-of-type(1):checked ~ label:nth-of-type(1), #css_tabs > label[for=tab1]:hover {
    background:black;
    color:#fff
}
#css_tabs input:nth-of-type(2):checked ~ label:nth-of-type(2), #css_tabs > label[for=tab2]:hover {
   background:black;
    color:#fff
}
#css_tabs input:nth-of-type(3):checked ~ label:nth-of-type(3), #css_tabs > label[for=tab3]:hover {
    background:black;
    color:#fff
}
#css_tabs input:nth-of-type(4):checked ~ label:nth-of-type(4), #css_tabs > label[for=tab4]:hover {
    background:black;
    color:#fff
}

/* 실제 내용이 담긴 div 요소 스타일 지정 */
#css_tabs .tab1_content, #css_tabs .tab2_content, #css_tabs .tab3_content, #css_tabs .tab4_content {
    padding:2em;
    border:1px solid #ddd;
    width:89%;
    height:100%
}
</style>
<div id="css_tabs" align="center">
    <input id="tab1" type="radio" name="tab" checked="checked" />
    <input id="tab2" type="radio" name="tab" />
    <input id="tab3" type="radio" name="tab" />
    <input id="tab4" type="radio" name="tab" />
    <label for="tab1">M2M이란?</label>
    <label for="tab2">서비스 제공</label>
    <label for="tab3">무결성 시스템</label>
    <label for="tab4">이용가이드</label>
    <div class="tab1_content">
        <br />멘토 to 멘티 라는 뜻으로, IT 응용프로그램을 기준으로 멘토, 멘티를 맺는 커뮤니케이션 입니다.</div>
    <div class="tab2_content">
        <br />IT 응용프로그램에 관심이 있고 멘토와 멘티를 찾고 계시다면, M2M 내 인맥과 프로그램 skill-up 정보를 무료로 제공해 드리려고 합니다. </div>
    <div class="tab3_content">
        <br />불법 스포츠, 도박 및 성인용 콘텐츠와 같은 눈쌀 찌푸리는 데이터를 주기적으로 관리하고 있으며, <br>이 외에도 정확하지 않는 정보는 고객센터를 통해 수정을 하고 있습니다.
    </div>
    <div class="tab4_content">
        <br />
        명예와 경험치란? <br>(1) 명예란? 멘토가 가진 내공이라 칭함. 멘토가 지식을 나누면 잠재적 멘티에게 명예를 얻게 된다. <br>(2) 경험치란? 멘토의 지식을 받아 성장한 멘티의 능력치이다. 또한, 일정량의 명예 혹은 경험치는 M2M 사이트의 가치를 올리게 된다.

    </div>
</div>