# System of Finding Your Perfect Home

## 1. Data

### The description of your data
+ Introduction to the data
    - 臺北市實價周報
    - 臺北捷運車站出入口座標
    - 臺北市各區運動中心
    - 臺北市超級市場
    - 臺北市傳統市(商)場
    - 臺北市各級學校分布圖
    - 臺北市公私立醫療院所

+ Where is the data from
    
    [臺北市資料大平臺](https://data.taipei/)

+ What do the columns and tables mean
    1. 臺北市實價周報
        
        臺北市不動產成交案件列表，記錄土地建物資訊、價格等
    2. 臺北捷運車站出入口座標
        
        捷運站出口位置
    4. 臺北市各區運動中心
        
        運動中心地址與座標
    6. 臺北市超級市場
        
        超級市場地址與座標及經營商家
    8. 臺北市傳統市(商)場
        
        傳統市場地址與座標
    10. 臺北市各級學校分布圖
        
        國小、國中、高中地址與座標
    12. 臺北市公私立醫療院所
        
        醫院、診所位置座標

+ Other information about your data (e.g. will it be updated in the future?)
    - 實價周報(2021-04-14)：每週更新
    - 醫療院所(2020-10-28)、傳統市場(2021-03-15)：每月更新
    - 各級學校(2021-03-23)、超級市場(2021-03-18)：每年更新
    - 捷運車站(2021-03-04)、運動中心(2021-03-19)：不定期更新
    (括號內為資料最後更新日期)


### The source of your data
+ Link to your data source
    - [臺北市實價周報](https://data.taipei/#/dataset/detail?id=a9a97996-3a55-46c8-9076-e5ebdefad6dc)
    - [臺北捷運車站出入口座標](https://data.taipei/#/dataset/detail?id=cfa4778c-62c1-497b-b704-756231de348b)
    - [臺北市各區運動中心](https://data.taipei/#/dataset/detail?id=80be7612-593f-4795-9935-a10ce0f7b75b)
    - [臺北市超級市場](https://data.taipei/#/dataset/detail?id=3186cd22-9783-4ddc-bf79-66e3c65e5324)
    - [臺北市傳統市(商)場](https://data.taipei/#/dataset/detail?id=89bebb3a-990d-4070-bd67-631a575f6d4a)
    - [臺北市各級學校分布圖](https://data.taipei/#/dataset/detail?id=58b4f7b9-d0c5-4de8-aa7f-981fcb625e45)
    - [臺北市公私立醫療院所](https://data.taipei/#/dataset/detail?id=ffdd5753-30db-4c38-b65f-b77892773d60)



## 2. Application Design

### Main idea
+ The purpose of your application

    希望透過多項條件，依據使用者的生活喜好，
    幫使用者快速搜尋、篩選出台北市內適合他居住的地段、地區。
### Functionality
+ What kind of information will be presented to users

    篩選出之推薦地區，及其詳細資訊 (如：滿足哪些使用者期望的條件)。


+ What kind of interaction will be available

    主要功能提供增加、減少篩選條件，依條件下去搜尋，
    並有「我的最愛」功能，使用者可記錄下推薦地區或修改。

+ What will be the scenario when a user use your application

    想尋找何處符合他的居住理想時，不需一間一間房子搜尋，以及自己閱讀很多資料，就能找到。

+ What kind of data will users be able to interact with
    - 可觀看地區周遭各項生活機能資訊
    - 我的最愛中的記錄


### Interface

+ Expected interface look (use figure or text to explain)
    
    預計有幾個下拉式選單或按鈕給使用者去挑選篩選條件，一個搜尋鍵，
    搜尋結果列表每一個row也將有按鈕給使用者加入我的最愛。

## 3. Work Plan
### Time schedule

| 期間 | 期間目標 |
|-----|------|
|4/21~5/5|將蒐集之資料整理分析統合|
|5/5~5/19|將所設計之系統功能(篩選及搜尋推薦地區等等)的SQL語言撰寫完成|
|5/19~6/3|建置website|
|6/3~6/10|最後確認、完成報告|
|6/10|報告|



### Discussion
[HackMD](https://hackmd.io/@finalproject1176)

### Repo
[GitHub](https://github.com/dola1210/DBMS21-Team26)



