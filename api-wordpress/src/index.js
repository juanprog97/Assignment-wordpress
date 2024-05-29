const express = require("express");
const app = express();
const port = 3000;

app.get("/", (req, res) => {
  res.send("Hi Api Commerce!!");
});

app.listen(port, () => {
  console.log(`Example app listening on port ${port}`);
});

app.get("/pricing-details", (req, res) => {
  res.json({
    data: [
      {
        title: "Free Trial",
        body: "Experience the basics of Wonderful Services at no cost with our Free Trial subscription. This package allows you to explore our core features and get a taste of the quality and convenience we provide. Perfect for new users who want to test the waters before committing.",
        price: "Free",
      },
      {
        title: "Monthly Subscription",
        body: "Our Monthly Subscription is ideal for those who prefer flexibility. Enjoy full access to all our services and exclusive benefits without a long-term commitment. With this plan, you can enjoy month-to-month convenience and cancel anytime if your needs change.",
        price: "500$",
      },
      {
        title: "Yearly Subscription",
        body: "For the best value and maximum benefits, choose our Yearly Subscription. This package offers everything in the Monthly plan but at a discounted annual rate. It’s perfect for loyal customers who want to enjoy uninterrupted access to our premium features and exclusive perks all year long.",
        price: "2500$",
      },
    ],
  });
});
