# Adapter Design Pattern Example

## Introduction
The Adapter Design Pattern is a structural design pattern that allows incompatible interfaces to work together. It acts as a bridge between two incompatible interfaces by converting the interface of a class into another interface that a client expects.

## Example Description
In this example, we demonstrate the Adapter Design Pattern in PHP for converting dates between the Gregorian and Persian calendars. We have two adapters: `GregorianToPersianAdapter` and `PersianToGregorianAdapter`. Each adapter implements the `DateAdapter` interface, providing methods for converting dates to and from the Persian and Gregorian calendars. The adapters enable seamless conversion between the two calendar systems without modifying the existing code for each calendar.

## How to Run
To run the example, execute the PHP script `example.php` in your command line interface. It demonstrates how to use the adapters to convert dates between the Gregorian and Persian calendars.

# مثال الگوی طراحی آداپتر

## مقدمه
الگوی طراحی آداپتر یک الگوی طراحی ساختاری است که به واسطه سازی بین دو رابط ناسازگار، امکان کار با هم دارد. این الگو به عنوان یک پل عمل می‌کند بین دو رابط ناسازگار با تبدیل رابط یک کلاس به رابط دیگری که مشتری انتظار دارد.

## توضیح مثال
در این مثال، ما الگوی طراحی آداپتر را در PHP برای تبدیل تاریخ‌ها بین تقویم‌های میلادی و شمسی نشان می‌دهیم. ما دو آداپتر داریم: `GregorianToPersianAdapter` و `PersianToGregorianAdapter`. هر آداپتر اینترفیس `DateAdapter` را پیاده سازی می‌کند و متدهایی برای تبدیل تاریخ‌ها به و از تقویم‌های شمسی و میلادی فراهم می‌کند. آداپترها امکان تبدیل بی دردسر بین دو سیستم تقویمی را فراهم می‌کنند بدون اینکه کد موجود برای هر تقویم را اصلاح کنیم.

## نحوه اجرا
برای اجرای مثال، اسکریپت PHP `example.php` را در رابط خط فرمان خود اجرا کنید. این نشان می‌دهد چگونه از آداپترها برای تبدیل تاریخ‌ها بین تقویم‌های میلادی و شمسی استفاده کنید.



## How to Use

### English:

1. First, install Docker on your system ([Docker](https://www.docker.com/))
2. Clone the project
3. Enter the project folder in your terminal and enter the following command:
    ```
    Docker-compose up -d
    ```
4. You can see the result of queries in your browser

### Persian:

نحوه استفاده :
-	ابتدا داکر را روی سیستم خود نصب کنید ( https://www.docker.com/)
-	پروژه را کلون کنید
-	در ترمینال خود وارد پوشه پروژه شوید و دستور زیر را وارد کنید:
     ```
     Docker-compose up -d
     ```
-	با اجرای برنامه نمونه های کوئری های ساخته شده را میتوانید چک کنید
