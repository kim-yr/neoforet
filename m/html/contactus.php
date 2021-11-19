<? include("../include/header.html") ?>
<div id="subContentsWrap">
  <div id="subContents">
    <div class="breadCrumbs">
      <ul>
        <li>
          <a href="../" class="home"><span class="material-icons"> home </span></a>
        </li>
        <li><a href="#">고객지원</a></li>
        <li><a href="contactus.html">온라인 문의</a></li>
      </ul>
    </div>
    <h2 class="subTitle">고객 지원</h2>
    <nav id="lnb">
      <h3 class="hidden">local navigation bar</h3>
      <ul class="depth02">
        <li><a href="faq.html">FAQ</a></li>
        <li><a href="contactus.html" class="checked">온라인 문의</a></li>
        <li><a href="#">담당자 연락처</a></li>
        <li><a href="#">제품 카탈로그</a></li>
        <li><a href="sample.html">샘플 신청</a></li>
      </ul>
    </nav>
    <!--a태그는 인라인이지만 특별요소라 블록요소 넣어도 됨. 단 a는 자제.
      span태그 안에는 인라인 요소만 넣기. p태그는 인라인 요소만 포함하는 블록요소.  -->
    <div class="boardBox">
      <div class="guide">
        <p>신청 내용에 개인 정보를 기재하시는 경우, 답변 완료 후 임의로 삭제될 수 있사오니 개인 정보 기재는 삼가주세요.</p>
        <p><span class="require">*</span> 항목은 필수 입력항목입니다.</p>
      </div>
      <form action="">
        <table class="board write">
          <colgroup>
            <col style="width: 10%" />
            <col style="width: 40%" />
            <col style="width: 10%" />
            <col style="width: 40%" />
          </colgroup>
          <tbody>
            <tr>
              <th scope="row">회사명<span class="require">*</span></th>
              <td><input type="text" name="" id="" /></td>
              <th scope="row">이름<span class="require">*</span></th>
              <td><input type="text" name="" id="" /></td>
            </tr>
            <tr>
              <th scope="row">휴대전화<span class="require">*</span></th>
              <td><input type="text" name="" id="" /></td>
              <th scope="row">이메일<span class="require">*</span></th>
              <td><input type="email" name="" id="" /></td>
            </tr>
            <tr>
              <th scope="row">샘플 종류<span class="require">*</span></th>
              <td colspan="3">
                <select name="" id="">
                  <option value="">샘플 종류를 선택하세요.</option>
                  <option value="">네오포레 CUP</option>
                  <option value="">네오포레 STRAW</option>
                  <option value="">네오포레 완충재</option>
                  <option value="">네오포레 FLEX</option>
                  <option value="">펄프 몰드</option>
                  <option value="">바이오플라스틱</option>
                </select>
              </td>
            </tr>
            <tr>
              <th scope="row">주소<span class="require">*</span></th>
              <td colspan="3" class="address">
                <div class="addr01">
                  <input type="text" name="" id="postcode" class="readonly" readonly placeholder="우편 번호" /><!--readonly: 글자입력X, 다른데서 읽어 오도록-->
                  <button onclick="searchPostCode();"><span class="material-icons"> search </span>우편번호 검색</button>
                </div>
                <div class="addr02">
                  <input type="text" name="" id="roadAddress" class="readonly" readonly placeholder="주소" />
                  <input type="text" name="" id="" class="kkk" placeholder="나머지 주소 입력" />
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">제목<span class="require">*</span></th>
              <td colspan="3"><input type="text" name="" id="" /></td>
            </tr>
            <tr>
              <th scope="row">내용 <span class="require">*</span></th>
              <td colspan="3">
                <textarea name="" id="" cols="30" rows="10" placeholder="내용을 쓰세요."></textarea>
              </td>
            </tr>
            <tr>
              <th scope="row">첨부파일</th>
              <td colspan="3"><input type="file" name="" id="" /></td>
            </tr>
          </tbody>
        </table>

        <div class="agreeBox">
          <div class="agree">
            <div class="infoAgree">
              <label class="checkbox">
                <input type="checkbox" name="" id="" />
                <span class="label">개인정보 수집에 동의합니다.</span>
              </label>
              <button>전문보기</button>
            </div>
            <div>
              <label class="checkbox">
                <input type="checkbox" name="" id="" />
                <span class="label">만 14세 이상입니다.</span>
              </label>
            </div>
          </div>
          <button type="submit" class="btn">확인</button>
        </div>
      </form>
    </div>
  </div>
</div>
<? include("../include/footer.html") ?>
