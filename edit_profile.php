<?php 
$pageTitle = 'Edit Profile - GoNpay';
include 'components/header.php';
?>

<div class="min-h-screen bg-gray-50 pb-16">
<!-- Profile Header Banner -->
<div class="w-full h-80 bg-gonpay-orange relative">
<!-- Banner Image with Diagonal Stripes -->
<img alt="Dashboard Banner" class="w-full h-full object-cover" src="images/dash_banner.png"/>
<!-- Profile Picture Container with Camera Icon -->
<div class="absolute -bottom-20 left-12 w-40 h-40 z-10">
<div class="w-full h-full rounded-full border-4 border-white shadow-md relative bg-white">
<img alt="John Doe" class="w-full h-full object-cover rounded-full" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&amp;auto=format&amp;fit=crop&amp;w=200&amp;h=200&amp;q=80"/>
<!-- Camera Icon Overlay -->
<div class="absolute bottom-0 right-0 w-10 h-10 bg-gonpay-orange rounded-full flex items-center justify-center shadow-md border-2 border-white cursor-pointer hover:bg-gonpay-orange-dark transition-colors z-20">
<i class="fas fa-camera text-white"></i>
</div>
</div>
</div>
</div>
<!-- Profile Form Section -->
<div class="container mx-auto px-4 pt-28 pb-8">
<div class="bg-white rounded-lg shadow-sm p-8">
<h2 class="text-2xl font-bold text-gonpay-dark mb-8"><?= $translations['profile'] ?? "Profile" ?></h2>
<form action="profile.php" method="POST">
<div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-8">
<?= $translations['first_name'] ?? "First Name" ?>
<div>
<label class="block text-gonpay-dark font-medium mb-2" for="firstName"><?= $translations['first_name'] ?? "First Name" ?></label>
<input class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-gonpay-orange focus:border-gonpay-orange transition-colors" id="firstName" name="firstName" type="text" value="John"/>
</div>
<?= $translations['last_name'] ?? "Last Name" ?>
<div>
<label class="block text-gonpay-dark font-medium mb-2" for="lastName"><?= $translations['last_name'] ?? "Last Name" ?></label>
<input class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-gonpay-orange focus:border-gonpay-orange transition-colors" id="lastName" name="lastName" type="text" value="Doe"/>
</div>
<?= $translations['birth_date'] ?? "Birth Date" ?>
<div>
<label class="block text-gonpay-dark font-medium mb-2" for="birthDate"><?= $translations['birth_date'] ?? "Birth Date" ?></label>
<input class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-gonpay-orange focus:border-gonpay-orange transition-colors" id="birthDate" name="birthDate" type="text" value="August 23, 2004"/>
</div>
<?= $translations['gender'] ?? "Gender" ?>
<div>
<label class="block text-gonpay-dark font-medium mb-2" for="gender"><?= $translations['gender'] ?? "Gender" ?></label>
<div class="relative">
<select class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-gonpay-orange focus:border-gonpay-orange transition-colors appearance-none bg-white" id="gender" name="gender">
<option selected="" value="male"><?= $translations['male'] ?? "Male" ?></option>
<option value="female"><?= $translations['female'] ?? "Female" ?></option>
<option value="other"><?= $translations['other'] ?? "Other" ?></option>
<option value="prefer-not-to-say"><?= $translations['prefer_not_to_say'] ?? "Prefer not to say" ?></option>
</select>
<div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
<i class="fas fa-chevron-down text-gray-400"></i>
</div>
</div>
</div>
<?= $translations['country'] ?? "Country" ?>
<div>
<label class="block text-gonpay-dark font-medium mb-2" for="country"><?= $translations['country'] ?? "Country" ?></label>
<div class="relative">
<select class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-gonpay-orange focus:border-gonpay-orange transition-colors appearance-none bg-white" id="country" name="country">
<option selected="" value="usa"><?= $translations['united_state'] ?? "United State" ?></option>
<option value="canada"><?= $translations['canada'] ?? "Canada" ?></option>
<option value="uk"><?= $translations['united_kingdom'] ?? "United Kingdom" ?></option>
<option value="australia"><?= $translations['australia'] ?? "Australia" ?></option>
<option value="germany"><?= $translations['germany'] ?? "Germany" ?></option>
</select>
<div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
<i class="fas fa-chevron-down text-gray-400"></i>
</div>
</div>
</div>
<?= $translations['city'] ?? "City" ?>
<div>
<label class="block text-gonpay-dark font-medium mb-2" for="city"><?= $translations['city'] ?? "City" ?></label>
<div class="relative">
<select class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-gonpay-orange focus:border-gonpay-orange transition-colors appearance-none bg-white" id="city" name="city">
<option selected="" value="new-york"><?= $translations['new_york'] ?? "New York" ?></option>
<option value="los-angeles"><?= $translations['los_angeles'] ?? "Los Angeles" ?></option>
<option value="chicago"><?= $translations['chicago'] ?? "Chicago" ?></option>
<option value="houston"><?= $translations['houston'] ?? "Houston" ?></option>
<option value="miami"><?= $translations['miami'] ?? "Miami" ?></option>
</select>
<div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
<i class="fas fa-chevron-down text-gray-400"></i>
</div>
</div>
</div>
<?= $translations['address'] ?? "Address" ?>
<div>
<label class="block text-gonpay-dark font-medium mb-2" for="address"><?= $translations['address'] ?? "Address" ?></label>
<input class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-gonpay-orange focus:border-gonpay-orange transition-colors" id="address" name="address" type="text" value="123 5th Ave Apt 4B New York, NY 10010, USA"/>
</div>
<?= $translations['postal_code'] ?? "Postal Code" ?>
<div>
<label class="block text-gonpay-dark font-medium mb-2" for="postalCode"><?= $translations['postal_code'] ?? "Postal Code" ?></label>
<input class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-gonpay-orange focus:border-gonpay-orange transition-colors" id="postalCode" name="postalCode" type="text" value="10001"/>
</div>
</div>
<!-- Save Button -->
<div class="mt-12 flex justify-end">
<button class="bg-gonpay-orange text-white px-10 py-3 rounded-full font-medium hover:bg-gonpay-orange-dark transition-all duration-300 btn-orange" type="submit"><?= $translations['save'] ?? "Save" ?></button>
</div>
</form>
</div>
</div>
</div>

<?php include 'components/footer.php'; ?>