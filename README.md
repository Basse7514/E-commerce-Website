# 🛒 Grocery Store E-commerce Website | متجر بقالة إلكتروني متكامل

[![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/HTML5)
[![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/CSS)
[![JS](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)](https://developer.mozilla.org/en-US/docs/Web/JavaScript)

مشروع متكامل لمتجر إلكتروني لبيع السلع الغذائية (Grocery Store) تم تطويره باستخدام لغة **PHP** وقاعدة بيانات **MySQL**. يتميز المشروع بواجهة مستخدم جذابة وسهلة الاستخدام، بالإضافة إلى لوحة تحكم شاملة لإدارة المتجر.

---

## 🚀 المميزات الرئيسية (Features)

### 👤 جانب المستخدم (User Side):
- **نظام الحسابات**: تسجيل مستخدم جديد وتسجيل الدخول مع تشفير الدخول.
- **تصفح المنتجات**: عرض المنتجات حسب التصنيفات (فواكه، لحوم، خضروات، أسماك).
- **البحث المتقدم**: إمكانية البحث عن المنتجات بالاسم بسرعة وسهولة.
- **سلة التسوق (Cart)**: إضافة المنتجات للسلة، تعديل الكميات، وحذف العناصر.
- **قائمة الأمنيات (Wishlist)**: حفظ المنتجات المفضلة للرجوع إليها لاحقاً.
- **نظام الطلبات**: إتمام العمليات الشرائية (Checkout) وتتبع حالة الطلبات.
- **الملف الشخصي**: تحديث بيانات المستخدم وصورة الملف الشخصي.
- **تواصل معنا**: نظام لإرسال الرسائل والاستفسارات للإدارة.

### 🛡️ لوحة التحكم (Admin Panel):
- **إحصائيات مباشرة**: عرض عدد المنتجات، الطلبات، المستخدمين، والرسائل.
- **إدارة المنتجات**: إضافة منتجات جديدة، تعديل بياناتها، أو حذفها.
- **إدارة الطلبات**: مراجعة طلبات العملاء وتحديث حالة الدفع (Pending / Completed).
- **إدارة المستخدمين**: التحكم في حسابات المستخدمين المسجلين.
- **إدارة الرسائل**: استقبال والرد على رسائل العملاء من صفحة الاتصال.

---

## 🛠️ التقنيات المستخدمة (Tech Stack)

- **Backend**: PHP (Object Oriented with PDO for Database security).
- **Database**: MySQL.
- **Frontend**: HTML5, CSS3, JavaScript (Vanilla).
- **Icons**: Font Awesome 6.
- **Animations**: CSS Transitions & Responsive Design.

---

## ⚙️ طريقة التشغيل (Installation Guide)

1. **تحميل المشروع**: قم بتحميل ملفات المشروع ووضعها في مجلد `htdocs` الخاص بـ XAMPP أو WAMP.
2. **قاعدة البيانات**:
   - افتح `phpMyAdmin`.
   - قم بإنشاء قاعدة بيانات جديدة باسم `shop_db`.
   - استورد ملف `shop_db.sql` المرفق مع المشروع.
3. **الإعدادات**:
   - تأكد من إعدادات الاتصال في ملف `config.php`:
     ```php
     $db_name = "mysql:host=localhost;dbname=shop_db";
     $username = "root";
     $password = "";
     ```
4. **التشغيل**: افتح المتصفح وادخل إلى الرابط: `http://localhost/E-commerce-Website/login.php`.

---

## 📸 لقطات من المشروع (Screenshots)

> [!NOTE]
> سيتم إضافة الصور قريباً. يمكنك إضافة صور حقيقية في مجلد `project images` وربطها هنا.

---

## 📄 الترخيص (License)
هذا المشروع متاح للاستخدام للأغراض التعليمية والتطويرية.

---

**تم التطوير بواسطة: [Bassel]**
**2-Year of SUT | Software Engineering Project**