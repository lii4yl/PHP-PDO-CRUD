
# ตัวอย่างการเขียนระบบ CRUD ด้วย PHP แบบ PDO

ระบบตัวอย่างนำไปลองศึกษากันดูนะครับ สามารถนำไปพัฒนาเพิ่มเติม เนื้อหานี้เขียนแบบพื้นฐานจึงยังไม่ได้เพิ่มเติมในส่วนการป้องกันการนำเข้าข้อมูลอย่างไรให้ปลอดภัยเมื่อนำไปใช้งานจริง เป็นเพียงตัวอย่างที่ทำให้เข้าใจการทำงานของระบบ CRUD ในเบื้องต้นเท่านั้น

## Features

- Create สร้างหรือเพิ่มรายการใหม่
- Read อ่านดึงค้นหาหรือดูรายการที่มีอยู่
- Update อัปเดตหรือแก้ไขรายการที่มีอยู่
- Delete ลบปิดใช้งานหรือลบรายการที่มีอยู่
## การนำไปใช้งาน

เชื่อมต่อฐานข้อมูล

```bash
  ไฟล์ connect.php อยู่ใน folder service 
  ให้ตั้งค่า username และ password ตามเครื่องของแต่ละคน
```

ไฟล์ตาราง tbl_product 

```bash
  อยู่ใน folder database
```


## ภาพตัวอย่างหน้าจอ

หน้า index
![หน้า index](https://i.imgur.com/WTEC7UP.png)

หน้า เพิ่มหนังสือเล่มใหม่
![หน้า เพิ่มหนังสือเล่มใหม่](https://i.imgur.com/FEO91e4.png)

หน้า แก้ไขข้อมูลหนังสือ
![หน้า แก้ไขข้อมูลหนังสือ](https://i.imgur.com/4tGq4Pl.png)

หน้า ลบหนังสือ
![หน้า ลบหนังสือ](https://i.imgur.com/kAELWlZ.png)
## License

ผู้จัดทำอนุญาตให้นำไปใช้งาน และแจกจ่ายได้โดยคงไว้ซึ่งที่มาของเนื้อหา ห้ามมิให้นำไปใช้งานในเชิงพาณีย์โดยตรง เช่น การนำไปจำหน่าย
